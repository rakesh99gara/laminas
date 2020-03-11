<?php
namespace Datascience\Controller;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\Authentication\AuthenticationService;


use RuntimeException;

class DatascienceController extends AbstractActionController
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
    public function pandasAction()
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
    public function numpyAction()
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
    public function scipyAction()
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
    public function matplotlibAction()
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