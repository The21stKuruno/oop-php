<?php
  class NewClass {
    // property
    public $data = "I am a property";

    // construct
    public function __construct() {
      echo "This class has been instantiated";
    }

    // methods
    public function setNewProperty($newdata) {
      $this->data = $newdata;
    }
    
    public function getProperty() {
      return $this->data;
    }

    // destruct

    public function __destruct() {
      echo "This is the end of the class";
    }
  }
?>
