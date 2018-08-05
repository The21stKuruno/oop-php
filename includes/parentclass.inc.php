<?php
  class ParentClass {
    // Properties and Methods goes here
    // You can use public in all classes
    private $namePrivate = "Private can only use in this class!";
    protected $nameProtected = "Protected can use in this class and extended class!";

    public function name() {
      return $this->namePrivate;
    }
  }
?>
