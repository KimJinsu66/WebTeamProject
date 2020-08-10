<?php
  include "../data/db.php";

  $id = $_POST['id'];
  $hint = $_POST['hint'];

  if($id == null || $hint == null){
    echo "<script>alert('ID와 hint을 모두 기입해주세요.'); location.href='../serchPw.php';</script>";
  }

  $sql = mq("select * from members where id = '$id' and hint = '$hint'");
  $check = $sql -> num_rows;
  $result = $sql -> fetch_array();

  if($check == 1){
    $_SESSION['uid'] = $id;
    echo "<script>alert('비밀번호를 새로 설정해주세요.'); location.href='../changePw.php';</script>";
    //header('Location: ../changePw.php');
  } else {
    echo "<script>alert('ID 또는 hint가 틀렸습니다.'); location.href='../serchPw.php';</script>";
  }

  ?>
