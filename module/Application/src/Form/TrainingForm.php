<?php

namespace Application\Form;
use Zend\Form\Form;


class TrainingForm extends Form
{

    public function __construct()
    {
        // Add "subject" field
        $this->add(
            [
            'type'  => 'text',        // Element type
            'name' => 'title',      // Field name
            'attributes' => [         // Array of attributes
                'id'  => 'title',
            ],
            'options' => [            // Array of options
                'label' => 'Titre de la formation:',  // Text label
            ],
        ],
            [
                'type'  => 'Date',        // Element type
                'name' => 'start_date',      // Field name
                'attributes' => [         // Array of attributes
                    'id'  => 'start_date',
                ],
                'options' => [            // Array of options
                    'label' => 'Date debut :',  // Text label
                ],
            ],
            [
                'type'  => 'Date',        // Element type
                'name' => 'end_date',      // Field name
                'attributes' => [         // Array of attributes
                    'id'  => 'end_date',
                ],
                'options' => [            // Array of options
                    'label' => 'Date Fin :',  // Text label
                ],
            ],
            [
                'type'  => 'description',        // Element type
                'name' => 'description',      // Field name
                'attributes' => [         // Array of attributes
                    'id'  => 'description',
                ],
                'options' => [            // Array of options
                    'label' => 'Description :',  // Text label
                ],
            ],
            [
                'type'  => 'submit',        // Element type
                'name' => 'submit',      // Field name
                'attributes' => [         // Array of attributes
                    'value'  => 'Submit',
                ],

            ],


        );
    }

}