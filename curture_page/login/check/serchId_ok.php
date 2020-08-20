<?php
  include "../../common/db.php";


  $name = $_POST['name'];
  $email = $_POST['email'];

  $sql = mq("select * from members where name = '$name' and email = '$email'");
  $check = $sql -> num_rows;
  $result = $sql -> fetch_array();
  $id = $result['id'];

  if($check == 1){
    echo "<script>alert('ID는 $id 입니다.'); location.href='../login.php';</script>";
  } else {
    echo "<script>alert('존재하지 않는 회원정보입니다.'); location.href='../serchId.php';</script>";
  }

  ?>
