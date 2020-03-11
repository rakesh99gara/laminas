<?php

namespace Home\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class HomeController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}