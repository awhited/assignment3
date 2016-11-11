<?php
  class auto {
    
    public $make;
    public $model;
    public $year;

    public function __construct($ma, $mo, $y) {
      $this->make = $ma;
      $this->model = $mo;
      $this->y = $y;
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
      

    } 
    

  }


?>
