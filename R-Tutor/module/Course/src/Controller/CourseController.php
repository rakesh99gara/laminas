<?php
namespace Course\Controller;
use Laminas\Mvc\Controller\AbstractActionController;

use RuntimeException;
use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\Adapter\Driver\ResultInterface;

use Laminas\Authentication\AuthenticationService;
class CourseController extends AbstractActionController
{

	public function __construct()
    {
        $this->auth = new AuthenticationService();
    }
	public function indexAction(){
		if ($this->auth->getIdentity()==null) {
            $this->flashMessenger()->addMessage('You are not logged in..');
            return $this->redirect()->toRoute('user',['action'=>'login']);
        }
        else{
        	return[
            'identity' => $this->auth->getIdentity(),
			];
        }

	}
	public function fetchdataAction(){
		
	}
    public function algorithmsAction(){
        
    }
    public function cAction(){
        
    }
    public function javaAction(){
        
    }
    public function htmlAction(){
        
    }
    public function cascadeAction(){
        
    }
    public function javascriptAction(){
        
    }
    public function androidAction(){
        
    }
    public function reactnativeAction(){
        
    }
    public function englishAction(){
        
    }
    public function networkingAction(){
        
    }
    public function cloudAction(){
        
    }
}