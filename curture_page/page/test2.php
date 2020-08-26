<?php 
  include "../common/db.php";

  $sql = mq("select * from members_bookmark where reviewNum like = 25 and membersNum = 1");
  $result = $sql -> fetch_array();

  echo $result['membersNum'];

?>