<?php
namespace Review\Form;

use Laminas\Form\Form;

class ReviewForm extends Form
{
    public function __construct($name = null)
    {
        // We will ignore the name provided to the constructor
        parent::__construct('review');

        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);
        $this->add([
            'name' => 'content',
            'type' => 'text',
            'options' => [
                'label' => 'Content',
            ],
        ]);
        $this->add([
            'name' => 'course_id',
            'type' => 'text',
            'options' => [
                'label' => 'Course ID',
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
?>