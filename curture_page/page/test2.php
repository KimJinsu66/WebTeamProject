<?php 
include "../common/db.php";

$sql =  mq("TRUNCATE TABLE comment where comment_no= 1");

var_dump($sql);

?>