<?php
class car {
  
  public $make;
  public $model;
  public $year;

  public $motor = new engine("", "");
  public $chassis = new chassis("","","");

  public function __construct($ma, $mo, $y) {
    $this->make = $ma;
    $this->model = $mo;
    $this->year = $y;
  }

  public function getMake() {
    return $this->make;
  }    

  public function getModel() {
    return $this->model;
  }

  public function getYear() {
    return $this->year;
  }
  
  public function __toString() {
  
    $first = "<h1>Car Info</h1>This vehicle is a  " . $this->getYear() . " ";
    $second =   $this->getMake() . " " . $this->getModel();
    $third = $this->$motor;
    $fourth= $this->$chassis;
    
    return $first . $second . "<br>" . $third . "<br>" . $fourth . "<br>";

  } 
  

}


?>
