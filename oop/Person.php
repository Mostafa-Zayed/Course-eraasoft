<?php

class Person
{
    public $firstName;
    public $lastName;
    public $type;

    public function showFullName()
    {
        echo $this->firstName.' '.$this->lastName;
    }
}