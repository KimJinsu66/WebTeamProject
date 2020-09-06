<?php
  include "../../common/db.php";
  include "../login_lib/password.php";

    $id = $_SESSION['id'];

    if($_POST['password']==null){
      echo "<script>alert('비밀번호를 입력해주세요'); history.back();</script>";
      exit;
    } else{
      //사용자가 입력한 password 값과  기존 db에 저장되어있는 암호화된 password를 비교하기 위해서 db를 불러온다.
      $sql = mq("select * from members where id='".$id."'");
      $result = $sql -> fetch_array();
      //db에 저장되어 있던 암호화된 password
      $hash_pw = $result['password'];
      //사용자가 입력한 password
      $password = $_POST['password'];
    }
  
  //password_verify(); 는 password.php에서 가져다 쓰는 것   
  //암호화된 password와  암호화 되지 않은 password를 비교해주는 함수
  if(password_verify($password, $hash_pw)){
    //회원탈퇴 완료 알림을 띄어주고 확인을 누르면 홈화면으로 이동시킨다.
    echo "<script>location.href='../../mypage_page/mypage.php?page=5';</script>";
  }

?>
