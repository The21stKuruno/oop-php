<?php
  class NewClass {
    // property
    public $data = "I am a property";
    // display the name of the class
    public $error = "This is the class called ".__CLASS__."!";

    // static property
    public static $static = 0;

    // static method
    public static function staticMethod() {
      return self::$static + 1;
    }

    // construct
    public function __construct() {
      echo "This class has been instantiated";
    }

    // toString Method
    public function __toString() {
      echo "toString method: ";
      return $this->error;
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
