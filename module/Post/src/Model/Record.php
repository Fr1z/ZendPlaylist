<?php
namespace Post\Model;

use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Record implements InputFilterAwareInterface {
    
    private $id;
    private $titolo;


    public function getId()
    {
        return ($this->id);      
    }
        public function getTitolo()
    {
        return ($this->titolo);      
    }
    
    public function exchangeArray($data)
    {
        $this->id =  isset($data['id']) ? trim($data['id']) : null;
        $this->titolo = isset($data['titolo']) ? trim($data['titolo']) : null;

    }
    
    public function getArrayCopy() 
    {
        return get_object_vars($this);
    }

    public function setInputFilter(InputFilterInterface $inputFilter) 
    {
        return;
    }

    public function getInputFilter() 
    {
        return $this->inputFilter;
    }
}
