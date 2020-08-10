<?php
  include "../data/db.php";
  include "../data/password.php";
  require_once('./lib/passwordcheck.php');

  $changePw = $_POST['pw'];
  $checkPw = $_POST['re_pw'];
  $checkid = $_SESSION['uid'];

  if($changePw != $checkPw){
    echo "<script>alert('두개의 비밀번호가 일치하지 않습니다.'); location.href='../changePw.php';</script>";
  }

  password_check($changePw);

  $password_code = password_hash($changePw,PASSWORD_DEFAULT);
  $sql = mq("update members set password = '$password_code' where id = '$checkid'");
    echo "<script>alert('변경 되었습니다.'); location.href='../login.php';</script>";

 ?>
