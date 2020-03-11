<?php
namespace Review\Controller;

use Laminas\Authentication\AuthenticationService;
use Laminas\Db\Adapter\Adapter as DbAdapter;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Review\Form\ReviewForm;
use Review\Model\Review;
use Review\Model\ReviewTable;

class ReviewController extends AbstractActionController
{
    public $id;
    public $content;
    public $course_id;
    public $user_id;
    private $table;
    public function __construct(ReviewTable $table)
    {
        $this->table = $table;
        $this->auth = new AuthenticationService();
        $this->dbAdapter = new DbAdapter([
            'driver' => 'Pdo_Sqlite',
            'database' => __DIR__ . '/../../../../data/rtutordb',
        ]);
    }
    public function indexAction()
    {
        return new ViewModel([
            'reviews' => $this->table->fetchAll(),
        ]);
    }
    public function addAction()
    {
        if ($this->auth->getIdentity() == null) {
            $this->flashMessenger()->addMessage('You are not logged in..');
            return $this->redirect()->toRoute('user', ['action' => 'login']);
        }

        $this->course_id = (int) $this->params()->fromRoute('id');
        $form = new ReviewForm();
        $form->get('submit')->setValue('Add Review');
        $form->get('course_id')->setValue($this->course_id);

        $request = $this->getRequest();

        if (!$request->isPost()) {
            return ['form' => $form];
        }
        $review = new Review();
        $form->setInputFilter($review->getInputFilter());
        $form->setData($request->getPost());

        if (!$form->isValid()) {
            return ['form' => $form];
        }
        $review->exchangeArray($form->getData());
        $this->table->saveReview($review, $this->auth->getIdentity()->id);
        $this->flashMessenger()->addMessage('Your review is added successfully.');
        return $this->redirect()->toRoute('course');
    }

    public function editAction()
    {
        if ($this->auth->getIdentity() == null) {
            $this->flashMessenger()->addMessage('You are not logged in..');
            return $this->redirect()->toRoute('user', ['action' => 'login']);
        }

        $id = (int) $this->params()->fromRoute('id', 0);

        try {
            $review = $this->table->getReview($id);
        } catch (\Exception $e) {
            $this->flashMessenger()->addMessage('Review with this id not found');
            return $this->redirect()->toRoute('course');
        }

        $form = new ReviewForm();
        $form->bind($review);
        $form->get('submit')->setAttribute('value', 'Edit');

        $request = $this->getRequest();
        $viewData = ['id' => $id, 'form' => $form];

        if (!$request->isPost()) {
            $statement = $adapter->query(
                "SELECT * FROM reviews WHERE id = '$id' "
            );
            $results = $statement->execute();
            $row = $results->current();

            if ($row['user_id'] != $this->auth->getIdentity()->id) {
                $this->flashMessenger()->addMessage('You are not authorized to do this action.');
                return $this->redirect()->toRoute('course');
            }
            return $viewData;
        }

        $form->setInputFilter($review->getInputFilter());
        $form->setData($request->getPost());

        if (!$form->isValid()) {
            return $viewData;
        }

        $this->table->saveReview($review, $this->auth->getIdentity()->id);
        $this->flashMessenger()->addMessage('Your review is updated successfully.');
        return $this->redirect()->toRoute('course');

    }

    public function deleteAction()
    {
        if ($this->auth->getIdentity() == null) {
            $this->flashMessenger()->addMessage('You are not logged in..');
            return $this->redirect()->toRoute('user', ['action' => 'login']);
        }

        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            $this->flashMessenger()->addMessage('Review with this id does not exists...');
            return $this->redirect()->toRoute('course');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                $this->flashMessenger()->addMessage('Review deleted successfully...');
                $this->table->deleteReview($id);
            }

            // Redirect to list of reviews

            return $this->redirect()->toRoute('course');
        }

        $statement = $this->dbAdapter->query(
            "SELECT * FROM reviews WHERE id = '$id' "
        );
        $results = $statement->execute();
        $row = $results->current();

        if ($row['user_id'] != $this->auth->getIdentity()->id) {
            $this->flashMessenger()->addMessage('You are not authorized to do this action.');
            return $this->redirect()->toRoute('course');
        }

        return [
            'id' => $id,
            'review' => $this->table->getReview($id),
        ];
    }

}
