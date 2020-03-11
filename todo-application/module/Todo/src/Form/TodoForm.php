<?php
namespace Todo\Form;

use Laminas\Form\Form;

class TodoForm extends Form
{
    public function __construct($name = null)
    {
        // We will ignore the name provided to the constructor
        parent::__construct('todo');

        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);
        $this->add([
            'name' => 'todo',
            'type' => 'text',
            'options' => [
                'label' => 'Todo',
            ],
        ]);
        $this->add([
            'name' => 'imp',
            'type' => 'text',
            'options' => [
                'label' => 'Imp',
            ],
        ]);
        $this->add([
            'name' => 'remarks',
            'type' => 'text',
            'options' => [
                'label' => 'Remarks',
            ],
        ]);
        $this->add([
            'name' => 'status',
            'type' => 'text',
            'options' => [
                'label' => 'Status',
            ],
        ]);
        $this->add([
            'name' => 'category_id',
            'type' => 'text',
            'options' => [
                'label' => 'Category Id',
            ],
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Go',
                'id'    => 'submitbutton',
            ],
        ]);
    }
}