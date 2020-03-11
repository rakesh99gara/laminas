<?php
namespace Bigdata\Controller;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\Authentication\AuthenticationService;

use RuntimeException;

class BigdataController extends AbstractActionController
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
    public function overviewAction()
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
    public function methodologyAction()
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
    public function analystAction()
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
    public function scientistAction()
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