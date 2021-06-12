<?php

class Person
{
    public $id;
    public $firstName;
    public $lastName;
    public $familyName;
    public $gender;
    public $status = false;

    public function __construct($id,$firstName,$lastName,$familyName,$gender,$status = false)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->familyName = $familyName;
        $this->gender = $gender;
        $this->status = $status;
    }

    public function showFullName()
    {
        if ($this->checkStatus())
            echo $this->firstName.' '.$this->lastName.' '.$this->familyName;
    }

    public function checkStatus()
    {
        if ($this->status == true)
            return true;
    }

}