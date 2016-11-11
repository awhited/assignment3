<?php
class chassis extends car {

  private $drivetrain;
  private $miles;
  private $code;

  public function getDt() {
    return $this->$drivetrain;
  }

  public function getMilage() {
    return $this->miles;
  }

  public function getCode() {
    return $this->code;
  }

  public function setDt($dtStr) {
    $this->$drivetrain = $dtStr;
  }

  public function setMilage($milesStr) {
    $this->$miles = $milesStr;
  }

  public function setCode($codeStr) {
    $this->$code = $codeStr;
  }

  public function __toString() {
    
    $one = "<ul>Chassis Info</ul>";

    return $one . "<br>" . 
            "<ul>" .
              "<li>" . "DriveTrain: " . $this->$getDt() . "</li>" .
              "<li>" . "Milage: " . $this->$getMilage() . "</li>" .
              "<li>" . "Chassis Code: " . $this->$getCode() . "</li>" .
            "</ul>";
  }
}
