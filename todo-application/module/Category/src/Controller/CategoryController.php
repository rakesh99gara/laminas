<?php
namespace Category\Controller;

use Category\Model\CategoryTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Category\Form\CategoryForm;
use Category\Model\Category;

class CategoryController extends AbstractActionController
{
    private $table;

    public function __construct(CategoryTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {
        return new ViewModel([
            'categorys' => $this->table->fetchAll(),
        ]);
    }

    public function addAction()
    {
        $form = new CategoryForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();

        if (! $request->isPost()) {
            return ['form' => $form];
        }

        $category = new Category();
        $form->setInputFilter($category->getInputFilter());
        $form->setData($request->getPost());

        if (! $form->isValid()) {
            return ['form' => $form];
        }

        $category->exchangeArray($form->getData());
        $this->table->saveCategory($category);
        return $this->redirect()->toRoute('todo');
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}