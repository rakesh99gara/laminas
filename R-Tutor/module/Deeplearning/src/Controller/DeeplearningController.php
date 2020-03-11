<?php
namespace Deeplearning\Controller;
use Laminas\Mvc\Controller\AbstractActionController;

use Laminas\Authentication\AuthenticationService;
use RuntimeException;

class DeeplearningController extends AbstractActionController
{
	public function __construct()
    {
        $this->auth = new AuthenticationService();
    }
	public function indexAction()
    {
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
    public function introductionAction()
    {
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
    public function annAction()
    {
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
    public function deepnnAction()
    {
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
    public function graphsAction()
    {
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
}