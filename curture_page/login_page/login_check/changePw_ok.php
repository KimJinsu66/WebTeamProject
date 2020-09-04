<?php
  include "../../common/db.php";
  include "../login_lib/password.php";
  require_once('./login_lib/passwordcheck.php');

  $changePw = $_POST['pw'];
  $checkPw = $_POST['re_pw'];
  $checkid = $_SESSION['uid'];
  //password_hash();는 password.php에서 만들어놓은 함수를 갖다 쓰는 것
  //비밀번호를 암호화해서 db에 저장 시키기 위함
  $password_code = password_hash($changePw,PASSWORD_DEFAULT);

  if($changePw != $checkPw){
    echo "<script>alert('두개의 비밀번호가 일치하지 않습니다.'); location.href='../changePw.php';</script>";
    exit;
  }
  //password_check(); 는 passwordcheck.php 에서 만들어 놓은 함수를 갖다 쓰는 것
  //입력된 비밀번호가 대소문자/숫자/특수문자로 조합이 되었는지 안되었는지를 판단해준다.
  password_check($changePw);

  //update로 기존의 비밀번호를 새롭게 변경된 (암호화로) 것으로 바꿔주기 위함
  $sql = mq("update members set password = '$password_code' where id = '$checkid'");
  if($sql){
    echo "<script>alert('변경 되었습니다.'); location.href='../login.php';</script>";
    exit;
  } else {
    echo "<script>alert('변경이 실패했습니다.'); history.back();</script>";
    exit;
  }
    

 ?>
