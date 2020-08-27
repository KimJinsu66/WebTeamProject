<?php
  include "../../common/db.php";
  include "../data/password.php";

    $id = $_SESSION['id'];

    if($_POST['password']==null){
      echo "<script>alert('비밀번호를 입력해주세요'); history.back();</script>";
      exit;
    } else{    
      $sql = mq("select * from members where id='".$id."'");
      $result = $sql -> fetch_array();
      $hash_pw = $result['password'];
      $password = $_POST['password'];
    }
  
 

  if(password_verify($password, $hash_pw)){
    $sql = mq("delete from members where id ='".$id."'");
    echo "<script>alert('회원탈퇴가 되었습니다. 그 동안 즐거웠습니다...'); location.href='../../home';</script>";
    session_destroy();
    exit;
  }else {
    echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.back();</script>";
    exit;
  }

?>
