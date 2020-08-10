<?php
  include "../data/db.php";


  $name = $_POST['name'];
  $email = $_POST['email'];
  if($name == null || $email == null){
    echo "<script>alert('이름과 이메일을 모두 기입해주세요.'); location.href='../serchId.php';</script>";
  }

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
