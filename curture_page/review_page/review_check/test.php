<?php
  include "../../../common/db.php";

  $sql = mq("select * from members_bookmark where membersNum = 2");
  $result = $sql -> fetch_array();

  $test = $result['reviewNum'];

  $text = explode(',', $test);
  
  echo "<pre>";
  var_dump($text);

  $text2 = implode(',', $text);
  echo "$text2<br>";


  $key = array_search('26', $text);

  echo "26의 key 는 : $key<br>";

  unset($text[0]);
  
  var_dump($text);

  $text2 = implode(',', $text);

  echo $text2;

  $array = explode(',', $text2);
  var_dump($array);
  
?>
