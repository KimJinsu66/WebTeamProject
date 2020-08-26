<?php
// 쿼리문을 이용해서 fetch_array 한 값의 결과문을 배열화 하주는 부분
 function get_array_user($result){
   $array = array(
     'mem_no' => $result['mem_no'],
     'id' => $result['id'],
     'password' => $result['password'],
     'gender' => $result['gender'],
     'name' => $result['name'],
     'birthday' => $result['birthday'],
     'email' => $result['email'],
     'country' => $result['country'],
     'rank' => $result['rank']);

     return $array;
 }
 ?>
