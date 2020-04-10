<?php
    namespace Post\Form;
    
    use Zend\Form\Form;
    use Zend\Form\Element;
    
    class PostForm extends Form{
    
        function __construct($name = null){
            parent::__construct('post');
            $this->setAttribute('method', 'POST');
            
            
            $titolo = new Element\Text('titolo');
            $titolo
            ->setLabel('Titolo')
            ->setAttributes([
                'class' => 'titolo',
                'size'  => '30',
                'required'   => true,
            ]);
            $this->add($titolo);
            
            /* Oppure
            $this->add([
                'name' => 'titolo',
                'type' => 'text',
                'required'   => true,
                'options' => [
                    'label' => 'Titolo',    
                    'size' => '30',
                    
                ]
            ]);
            */
            
            $this->add([
                'name' => 'submit',
                'type' => 'submit',
                'attributes' => [
                    'value' => "Salva",
                    'id' => "buttonsave",
                ]
            ]);
        }
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

