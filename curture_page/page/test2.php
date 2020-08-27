<?php 
  include "../common/db.php";

  $sql = mq("select * from members where id = 'chlwhd12'");
  $result = $sql -> fetch_array();
  $sql2 = mq("update members set point ='".$result['point']."'+3 where id ='chlwhd12' ")


  

?>