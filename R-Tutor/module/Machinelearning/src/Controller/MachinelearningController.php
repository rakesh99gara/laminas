<?php
namespace Machinelearning\Controller;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\Authentication\AuthenticationService;

use RuntimeException;

class MachinelearningController extends AbstractActionController
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
    public function basicsAction()
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
    public function classificationAction()
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
    public function regressionAction()
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
    public function clusteringAction()
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