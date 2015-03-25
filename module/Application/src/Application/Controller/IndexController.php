<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Form\HorizontalForm;
use Application\Form\InlineForm;
use Zend\Form\Element;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $horizontalForm = new HorizontalForm();

        $inlineForm = new InlineForm();

        $txtNome = new Element\Text('txtNome');
        $txtNome->setLabel('Nome');

        $btnGroup1=new Element\Button('btnGroup1');
        $btnGroup1->setLabel('Esquerda');
        $btnGroup2=new Element\Button('btnGroup2');
        $btnGroup2->setLabel('Centro');
        $btnGroup3=new Element\Button('btnGroup3');
        $btnGroup3->setLabel('Direita');

        $dropDown=new Element\Button('dropDown');
        $dropDown->setOptions([
            'label' => "Salvar e Concluir",
            'glyphicon' => 'new-window',
            'dropdown' => [
                'split' => true,
                'dropup' => true,
                'items' => [
                    [
                        'label' => 'Salvar',
                        'item_attributes' => [
                            'title' => 'Salvar',
                        ]
                    ],
                    [
                        'label' => 'Salvar e Incluir',
                        'item_attributes' => [
                            'title' => 'Salvar e Incluir um Novo',
                        ]
                    ],
                ]
            ]
        ]);

        $inputGroup = new Element\Text('inputGroup',['add-on-prepend' => 'R$']);
        $inputGroup->setLabel('Preço');
        return new ViewModel([
            'horizontalForm' => $horizontalForm,
            'inlineForm' => $inlineForm,
            'txtNome' => $txtNome,
            'btnGroup1' => $btnGroup1,
            'btnGroup2' => $btnGroup2,
            'btnGroup3' => $btnGroup3,
            'dropDown' => $dropDown,
            'inputGroup' => $inputGroup
        ]);
    }
}
