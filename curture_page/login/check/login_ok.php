<?php
  include "../../common/db.php";
  include "../data/password.php";

  if($_POST['id'] == null || $_POST['password'] == null) {
    echo "<script>alert('아이디와 비밀번호를 모두 작성해주세요.'); location.href='../login.php';</script>";
    exit;
  }
  
  $sql = mq("select * from members where id='".$_POST['id']."'");
  $member = $sql -> fetch_array();


  $sql2 = mq("select * from members where id='".$_POST['id']."'");
  $member2 = $sql2 -> fetch_array();
  $rank = $member2['rank'];
  
  //DB에 있는 암호화된 pw와 사용자가 입력한 pw 변수에 저장해놓는다.
  $hash_pw = $member['password'];
  $password = $_POST['password'];

  //위에서 가져온 pw들이 일치하는지 안하는지를 참/거짓의 값으로 돌려주는 함수를 사용 password.php에서 가져다씀
  if(password_verify($password, $hash_pw)){
    $_SESSION['id'] = $member["id"];
    $_SESSION['password'] = $member["password"];
    //일반회원과 관리자들을 따로따로 홈페이지로 보내주기 위해서 추가 조건
    if($rank == "member") {
      echo "<script>alert('로그인 되었습니다.'); location.href='../../home/index.php';</script>";
    } else {
      echo "<script>alert('로그인 되었습니다.'); location.href='../../home/index.php';</script>";
    }
  } else {
    echo "<script>alert('아이디 또는 비밀번호를 정확히 입력해주세요.'); location.href='../login.php';</script>";

  }

 ?>
