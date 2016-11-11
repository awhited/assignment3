<?php
class engine extends car {

  public $type;
  public $milage;

  public function __construct($t,$m) {
    $this->$type = $t;
    $this->$milage = $m;  
  }

  public function getType() {
    return $this->$type;
  }

  public function getMilage() {
    return $this->$milage;
  }

  public function setType($typeStr) {
    $this->$type = $typeStr;
  }

  public function setMilage($milesStr) {
    $this->$milage = $milesStr;
  }
  public function __toString() {
    
    $one = "<ul>Motor Info</ul>";

    return $one . "<br>" . 
            "<ul>" .
              "<li>" . "Model: " . $this->$getType() . "</li>" .
              "<li>" . "Milage: " . $this->$getMilage() . "</li>" .
            "</ul>";
  }
}

?>
