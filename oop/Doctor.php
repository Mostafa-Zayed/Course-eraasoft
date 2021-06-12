<?php
include_once 'Person.php';

class Doctor extends Person
{
    public $special;
}

$ahmed = new Doctor(44,'ahmed','ali','zakey','male',true);
$ahmed->showFullName();
echo '<pre>';
var_dump($ahmed);
echo '</pre>';