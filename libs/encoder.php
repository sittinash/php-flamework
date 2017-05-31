<?php

  /*
  Author: Sittinut CHIVAKUNAKORN
  Copyright (c) Heisenberg Web Design and Implement
  */

  class Encoder
  {

    public static function encode($str)
    {
        return md5($str);
    }

  }

 ?>
