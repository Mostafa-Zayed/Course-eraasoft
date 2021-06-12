<?php

class User
{
    //public $testing;
    public $firstName = 'firstname';
    public $lastName;
    public $familyName;

    // methods
     function showFullName()
    {
        echo $this->firstName. ' '.$this->lastName.' '.$this->familyName;
    }

}

class User2 extends User
{

}
$mohamed = new User;
$mohamed->firstName = 'mohamed';
$mohamed->lastName = 'ali';
$mohamed->familyName = 'familyName';
$mohamed->showFullName();
echo '<br>';
//die();
//echo $mohamed->firstName . ' '. $mohamed->lastName . ' '.$mohamed->familyName;
//echo '<pre>';
//print_r($mohamed);
//echo '</pre>';

$ahmed = new user;
$ahmed->firstName = 'ahmed';
$ahmed->lastName = 'mohamed';
$ahmed->familyName = 'familyName';
$ahmed->showFullName();
die();
$mona = new User;

echo '<pre>';
print_r($ahmed);
echo '</pre>';
die();
echo '<pre>';
print_r($mona);
echo '</pre>';