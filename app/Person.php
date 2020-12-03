<?php

namespace App;

/**
 * Describe person with Name and Age
 */
 
 class Person
 {
     /**
      * Person Name
      * @var string
      */
    protected $name;

    /**
     * Person Age
     *
     * @var int
     */
    protected $age;

    /**
     * Create new person with age
     *
     * @param string $age
     * @return  void  
     */
    
    public function __construct(string $age)
    {
        $this->age=$age;
    }

    /**
     * setting name of person
     *
     * @param string $ame
     * @return  void
     */
    
    public function setName(string $name)
    {
        $this->name=$name;
    }
    
    /**
     * Get person name
     *
     * @return  string  
     */

    public function getName()
    {
        return $this->name;
    }

    /**
     * Get person age
     *
     * @return  int
     */
    
    public function getAge()
    {
        return $this->age;
    }
}