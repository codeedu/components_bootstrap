<?php
namespace Application\Form;

use Zend\Form\Form;

class InlineForm extends Form
{

    public function __construct()
    {
        parent::__construct();

        $this->add([
            'name' => 'id',
            'type' => 'Text'
        ]);

        $this->add([
            'name' => 'nome',
            'type' => 'Select',
            'options' => [
                'value_options' => [
                    0 => 'Fulano',
                    1 => 'Cicrano'
                ]
            ]
        ]);

        $this->add([
            'name' => 'marque',
            'type' => 'Checkbox',
            'options' => [
                'label' => 'Marque aqui'
            ]
        ]);

        $this->add([
            'name' => 'cor',
            'type' => 'Radio',
            'options' => [
                'value_options' => [
                    0 => 'Verde',
                    1 => 'Branco'
                ]
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'Button',
            'options' => [
                'label' => 'Enviar'
            ]
        ]);
    }
}