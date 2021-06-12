<?php
include_once 'Person.php';

class User extends Person
{
    private $email;
    public $password;
    private $name;

    public function makePasswordHased($password)
    {
        $this->password = password_hash($password,PASSWORD_DEFAULT);
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setName($name)
    {
        $this->name = ucfirst($name);
    }

    public function getName()
    {
        return $this->name;
    }
}

$mohamed = new User(44,'ahmed','ali','mohamed','male',true);
$mohamed->setName('mohamed');
echo $mohamed->getName();
$mohamed->setEmaile('mohamed@gmail.com') ;
$mohamed->makePasswordHased('mohamed');
$mohamed->showFullName();
echo '<pre>';
print_r($mohamed);
echo '</pre>';