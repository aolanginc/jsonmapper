<?php
namespace Entity;

class A{

    public function __construct()
    {
        
    }

    /**
     * @var string
     */
    private $a = false;

    /**
     * Get the value of a
     *
     * @return  string
     */ 
    public function getA()
    {
        return $this->a;
    }

    /**
     * Set the value of a
     *
     * @param  [string]  $a
     *
     * @return  self
     */ 
    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }
}
