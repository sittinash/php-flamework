<?php

  /*
  Author: Sittinut CHIVAKUNAKORN
  Copyright (c) Heisenberg Web Design and Implement
  */

  class Singleton
  {

    private static $instance;

    protected function Singleton()
    {

    }

    public static function getInstance()
    {
      if(static::$instance === null){
        static::$instance = new static();
      }
      return static::$instance;
    }

  }

 ?>
