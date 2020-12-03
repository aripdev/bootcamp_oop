<?php

namespace App;

/**
 * Police Officer
 */
 
 class Police
 {
    
    /**
     * police officer member
     *
     * @var Person $officer
     */
    
    protected $officer;

    /**
     * Add police officer
     *
     * @param Person $officer
     * @return void
     */
    
    public function addOfficer(Person $officer)
    {
        $this->officer=$officer;
    }

    /**
     * Get person police officer
     *
     * @return  Person
     */
    
    public function getOfficer()
    {
        return $this->officer;
    }

    /**
     * Calling name police officer 
     *
     * @return  void  
     */
    
    public function getOfficerName()
    {
        echo $this->officer->getName();
    }

    /**
     * Calling age police officer
     *
     * @return  void
     */
    
    public function getOfficerAge()
    {
        echo $this->officer->getAge();
    }
    
}