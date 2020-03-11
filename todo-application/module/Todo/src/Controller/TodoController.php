<?php
namespace Todo\Controller;

use Laminas\Authentication\AuthenticationService;
use Laminas\Db\Adapter\Adapter as DbAdapter;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Todo\Form\TodoForm;
use Todo\Model\Todo;
use Todo\Model\TodoTable;

class TodoController extends AbstractActionController
{
    private $table;

    public function __construct(TodoTable $table)
    {
        $this->table = $table;
        $this->auth = new AuthenticationService();
        $this->dbAdapter = new DbAdapter([
            'driver' => 'Pdo_Sqlite',
            'database' => __DIR__ . '/../../../../data/todoapp.db',
        ]);
    }

    public function indexAction()
    {
        if ($this->auth->getIdentity() == null) {
            $this->flashMessenger()->addMessage('You are not logged in..');
            return $this->redirect()->toRoute('user', ['action' => 'login']);
        }
        // else{
        //     // return[
        //     // 'identity' => $this->auth->getIdentity(),
        //     // ];
        // return new ViewModel([
        //     'todos' => $this->table->fetchUseridTodo($this->auth->getIdentity()->id),
        //     'identity' => $this->auth->getIdentity(),
        // ]);
        // }
        // return new ViewModel([
        //     'todos' => $this->table->fetchAll(),
        // ]);
        return new ViewModel([
            'todos' => $this->table->fetchUseridTodo($this->auth->getIdentity()->id),
            'identity' => $this->auth->getIdentity(),
        ]);
    }

    public function addAction()
    {
        if ($this->auth->getIdentity() == null) {
            $this->flashMessenger()->addMessage('You are not logged in..');
            return $this->redirect()->toRoute('user', ['action' => 'login']);
        }
        $form = new TodoForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();

        if (!$request->isPost()) {
            return ['form' => $form];
        }

        $todo = new Todo();
        $form->setInputFilter($todo->getInputFilter());
        $form->setData($request->getPost());

        if (!$form->isValid()) {
            return ['form' => $form];
        }

        $todo->exchangeArray($form->getData());
        $this->table->saveTodo($todo, $this->auth->getIdentity()->id);
        return $this->redirect()->toRoute('todo');
    }

    public function editAction()
    {
        if ($this->auth->getIdentity() == null) {
            $this->flashMessenger()->addMessage('You are not logged in..');
            return $this->redirect()->toRoute('user', ['action' => 'login']);
        }
        $id = (int) $this->params()->fromRoute('id', 0);

        if (0 === $id) {
            return $this->redirect()->toRoute('todo', ['action' => 'add']);
        }

        // Retrieve the album with the specified id. Doing so raises
        // an exception if the album is not found, which should result
        // in redirecting to the landing page.
        try {
            $todo = $this->table->getTodo($id);
        } catch (\Exception $e) {
            return $this->redirect()->toRoute('todo', ['action' => 'index']);
        }

        $form = new TodoForm();
        $form->bind($todo);
        $form->get('submit')->setAttribute('value', 'Edit');

        $request = $this->getRequest();
        $viewData = ['id' => $id, 'form' => $form];

        if (!$request->isPost()) {
            // $statement = $adapter->query(
            //     "SELECT * FROM todo WHERE id = '$id' "
            // );
            // $results = $statement->execute();
            // $row = $results->current();

            // if ($row['user_id'] != $this->auth->getIdentity()->id) {
            //     $this->flashMessenger()->addMessage('You are not authorized to do this action.');
            //     return $this->redirect()->toRoute('course');
            // }
            return $viewData;
        }

        $form->setInputFilter($todo->getInputFilter());
        $form->setData($request->getPost());

        if (!$form->isValid()) {
            return $viewData;
        }

        $this->table->saveTodo($todo,$this->auth->getIdentity()->id);

        // Redirect to album list
        return $this->redirect()->toRoute('todo', ['action' => 'index']);
    }

    public function deleteAction()
    {
        if ($this->auth->getIdentity() == null) {
            $this->flashMessenger()->addMessage('You are not logged in..');
            return $this->redirect()->toRoute('user', ['action' => 'login']);
        }
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('todo');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                $this->table->deleteTodo($id);
            }

            // Redirect to list of albums
            return $this->redirect()->toRoute('todo');
        }

        return [
            'id' => $id,
            'todo' => $this->table->getTodo($id),
        ];

    }

    public function fetchtodoAction(){
		
	}
}
