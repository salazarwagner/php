<?php

class Task {
  
  public $id;
  public $description;
  public $completed;

  public function isComplete() {
    return $this->completed;
  }

  public function complete() {
    $this->completed = true;
  }
    
}