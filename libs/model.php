<?php

  /*
  Author: Sittinut CHIVAKUNAKORN
  Copyright (c) Heisenberg Web Design and Implement
  */

  class Model
  {

    protected $database;

    function Model()
    {
      $this->database = new Database();
    }

    function getDB()
    {
      return $this->database;
    }

    function setDB($database)
    {
      $this->database = $database;
    }

  }

 ?>
