<?php
  class NewClass {
    // property
    public $data = "I am a property";

    // methods
    public function setNewProperty($newdata) {
      $this->data = $newdata;
    }
    
    public function getProperty() {
      return $this->data;
    }
  }
?>
