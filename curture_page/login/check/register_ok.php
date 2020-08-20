<?php
  include "../../common/db_info.php";
  include "../data/password.php";
  require_once('./lib/passwordcheck.php');

  $id = $_POST['id'];
  $gender = $_POST['gender'];
  $name = $_POST['name'];
  $birthday = $_POST['birthday'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $country = $_POST['country'];
  $hint = $_POST['hint'];

  $password_code = password_hash($_POST['password'],PASSWORD_DEFAULT); // password_hash는 입력된 password를 암호화 시켜줌
  $id_hangle_check = preg_match('/[^a-z 0-9]/u',$id);     // 아이디에 알파벳 소문자와 숫자로만 입력하도록 하는 코딩 ^a-z 0-9에서 ^는 NOT이라는 표현식
  if($id_hangle_check == 1){
    echo "<script>alert('아이디는 영문과 숫자로만 작성해주세요.'); location.href='../register.php';</script>";
    exit;
  }

  password_check($password);         // password_check는 LIB 파일에 함수를 미리 만들어놓은 것

  $id_check = "select * from members where id = '$id'";    //입력받은 아이디가 현제 DB에 존재하는지를 확인해주는 역할이다.
  $result =  $mysqli ->query($id_check);
   if($result->num_rows ==1 ) {
     echo "<script>alert('이미 존재하는 아이디입니다.'); location.href='../register.php';</script>";
     exit;
   } else {
     echo "good";
   }

   $query = "insert into members (id,password,gender,name,email,birthday,country, hint)
           values('$id','$password_code','$gender','$name','$email','$birthday','$country','$hint')";
   $execute = $mysqli ->query($query);
   if($execute) {
     echo "<script>alert('회원가입이 완료되었습니다.'); location.href='../login.php';</script>";
   }   else{
       echo "error occured"."<br>";
       echo $mysqli->error;
     }

 ?>
