<?php

class Course
{
    // attributes
    public $name;
    public $price;
    public $id;
    public $description;
    public $status = false;
    // methods

    // construct
    public function __construct($id,$name,$price,$description,$status = false)
    {
        $this->id =  $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->status = $status;
    }
    public function checkSatatus()
    {
        if ($this->status == true)
            return true;
    }

    public function showCourse()
    {
        if ($this->checkSatatus()) {
            echo $this->id .' '.$this->name.' '.$this->price.' ';
        }
    }
}


$php = new Course('33','php',330,'php course',true);
$html = new Course('44','html',400,'html course',true);
echo '<pre>';
var_dump($php);
echo '</pre>';
echo '<pre>';
var_dump($html);
echo '</pre>';
