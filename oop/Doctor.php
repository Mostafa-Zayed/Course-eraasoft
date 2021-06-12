<?php
include_once 'Person.php';

class Doctor extends Person
{
    public $special;
}


class Test extends Doctor
{
    public $test;
}

$test = new Test;
echo '<pre>';
var_dump($test);
echo '</pre>';
die();
$ahmed = new Doctor;
$ahmed->firstName = 'ahmed';
$ahmed->lastName = 'ali';
$ahmed->showFullName();
echo '<pre>';
var_dump($ahmed);
echo '</pre>';