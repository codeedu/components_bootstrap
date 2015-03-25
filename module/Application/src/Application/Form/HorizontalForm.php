<?php
namespace Application\Form;

use Zend\Form\Form;

class HorizontalForm extends Form
{

    public function __construct()
    {
        parent::__construct();

        $this->add([
            'name' => 'id',
            'type' => 'Text',
            'options' => [
                'label' => 'ID'
            ]
        ]);

        $this->add([
            'name' => 'nome',
            'type' => 'Select',
            'options' => [
                'label' => 'Nome',
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
                'label' => 'Marque esta opção'
            ]
        ]);

        $this->add([
            'name' => 'cor',
            'type' => 'Radio',
            'options' => [
                'label' => 'Escolha uma cor',
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