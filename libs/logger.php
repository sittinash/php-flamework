<?php

  /*
  Author: Sittinut CHIVAKUNAKORN
  Copyright (c) Heisenberg Web Design and Implement
  */

  class Logger
  {

    public static function write($message, $pwd, $logType = logEnum::TYPE_INF)
    {
      if(LOG_FLAG)
      {
        date_default_timezone_set(TIMEZONE);
        $currentTime = date("h:i:s");
        $lineMessage = $logType.' | '.$currentTime.' | @'.$pwd.' | > '.$message."\n";
        $logFly = fopen(PATH_LOG.IP::getIP().'-log.txt', 'a+');
        fwrite($logFly, $lineMessage);
        fclose($logFly);
      }
    }

  }

 ?>
