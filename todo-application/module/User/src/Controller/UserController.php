<?php
namespace User\Controller;
use Laminas\Mvc\Controller\AbstractActionController;

use RuntimeException;
use Laminas\View\Model\ViewModel;


use Laminas\Db\Adapter\Driver\ResultInterface;
use Laminas\Db\Sql\Sql;
use Laminas\Db\Adapter\Adapter as DbAdapter;
use Laminas\Authentication\Adapter\DbTable\CallbackCheckAdapter as AuthAdapter;
use Laminas\Authentication\AuthenticationService;

use Laminas\Session\Container;

$dbAdapter = new DbAdapter([
    'driver'   => 'Pdo_Sqlite',
    'database' => __DIR__ . '/../../../../data/todoapp.db',
]);


use User\Form\RegisterForm;
use User\Form\UserForm;


class UserController extends AbstractActionController
{
	private $dbAdapter;
    private $authAdapter;
    private $auth;
    public $id;
    public $username;
    public $password;
    public $realname;

	public function __construct()
    {
        $passwordValidation = function ($hash, $password) {
            return password_verify($password, $hash);
        };
        $this->dbAdapter = new DbAdapter([
                        'driver'   => 'Pdo_Sqlite',
                        'database' => __DIR__ . '/../../../../data/todoapp.db',
                    ]);
        $this->authAdapter = new AuthAdapter(
                            $this->dbAdapter,
                            'users',
                            'username',
                            'password',
                            $passwordValidation
                        );
        $this->auth = new AuthenticationService();
    }

    public function registerAction(){
        if ($this->auth->getIdentity()!=null) {
            $this->flashMessenger()->addMessage('You are Already logged in..');
        	return $this->redirect()->toRoute('user');
        }

        $form = new RegisterForm();
        $form->get('submit')->setValue('Add User');

        $request = $this->getRequest();

        if (! $request->isPost()) {
            return ['form' => $form];
        }

        $form->setData($request->getPost());

        if (! $form->isValid()) {
            return ['form' => $form];
        }

        $this->id     = !empty($form->getData()['id']) ? $form->getData()['id'] : null;
        $this->username = !empty($form->getData()['username']) ?$form->getData()['username'] : null;
        $this->password= !empty($form->getData()['password']) ? $form->getData()['password'] : null;
        $this->realname= !empty($form->getData()['realname']) ? $form->getData()['realname'] : null;
        $hash = password_hash($this->password, PASSWORD_DEFAULT);
        $statement = $this->dbAdapter->query(
            "INSERT INTO users (username, password, real_name) VALUES ('$this->username', '$hash', '$this->realname')"
                );
                $results = $statement->execute();
        $this->flashMessenger()->addMessage('Your account is created successfully. Please Login here');
        return $this->redirect()->toRoute('user', ['action' => 'login']);

    }

    public function loginAction(){
        if ($this->auth->getIdentity()!=null) {
            $this->flashMessenger()->addMessage('You are Already logged in..');
        	return $this->redirect()->toRoute('user');
        }

        $form = new UserForm();
        $form->get('submit')->setValue('Login');

        $request = $this->getRequest();

        if (! $request->isPost()) {
            return ['form' => $form];
        }

        $form->setData($request->getPost());

        if (! $form->isValid()) {
            return ['form' => $form];
        }

        $this->id     = !empty($form->getData()['id']) ? $form->getData()['id'] : null;
        $this->username = !empty($form->getData()['username']) ?$form->getData()['username'] : null;
        $this->password= !empty($form->getData()['password']) ? $form->getData()['password'] : null;

         $this->authAdapter
            ->setIdentity($this->username)
            ->setCredential($this->password);
        $result = $this->auth->authenticate($this->authAdapter);
        $container = new Container('rakesh');
        if($result->isValid()){
            $this->auth->getStorage()->write($this->authAdapter->getResultRowObject());
        }
        else{
            $this->flashMessenger()->addMessage('Invalid username or password');
            return $this->redirect()->toRoute('user',['action' => 'login']);
        }

        $this->flashMessenger()->addMessage('You are now logged in..');
        return $this->redirect()->toRoute('todo');
        echo $result->getIdentity() . "\n\n";
        print_r($authAdapter->getResultRowObject());
    }

	public function indexAction(){
		if ($this->auth->getIdentity()==null) {
            $this->flashMessenger()->addMessage('You are not logged In. Please Login Here...');
        	return $this->redirect()->toRoute('user',['action' => 'login']);
        }
        else{

        	$return = ['success' => true];
		    $flashMessenger = $this->flashMessenger();
		    if ($flashMessenger->hasMessages()) {
		        $return['messages'] = $flashMessenger->getMessages();
		    }
		    $return['identity'] = $this->auth->getIdentity();
        	return $return;
        }

	}

	public function logoutAction(){
        if ($this->auth->getIdentity()==null) {
        	$this->flashMessenger()->addMessage('You are not logged in. Please Login Here...');
       		return $this->redirect()->toRoute('user',['action' => 'login']);
        }
        $this->auth->clearIdentity();

        $this->flashMessenger()->addMessage('You are now logged out..');
        return $this->redirect()->toRoute('user',['action' => 'login']);
    }
}