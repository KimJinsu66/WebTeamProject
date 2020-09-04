<?php
  include "../../common/db.php";


  $name = $_POST['name'];
  $email = $_POST['email'];
  // 아이디를 찾기 위해서는 회원가입했을 때 적었던 이름과 email값을 입력해야한다.
  // 사용자가 입력한  name과 email값이 db에 존재하는지 확인하기 위함
  $sql = mq("select * from members where name = '$name' and email = '$email'");
  //만약에 존재한다면 num_rows는 1이되고 존재하지 않으면 0이 된다.
  $check = $sql -> num_rows;
  $result = $sql -> fetch_array();
  //사용자가 입력한 name과 email을 통해서 얻은 db값에 id값을 가져와서 사용자에게 보여주기 위해서 변수로 저장
  $id = $result['id'];
  
  if($check == 1){
    // 알림을 통해서 사용자의 id를 알려주고 확인을 누르면 로그인 페이지로 이동시킨다.
    echo "<script>alert('ID는 $id 입니다.'); location.href='../login.php';</script>";
  } else {
    echo "<script>alert('존재하지 않는 회원정보입니다.'); location.href='../serchId.php';</script>";
  }

  ?>
