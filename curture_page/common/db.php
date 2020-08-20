 <?php
  session_start();

  $db = new mysqli("localhost","jongin","1004","entertripdb");
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>
