<?php
  include "../../common/db_info.php";
  include "../login_lib/password.php";
  require_once('../login_lib/passwordcheck.php');

  //preg_replace(); 는 문자열의 모든 공백제거 해주는 함수
  $id = preg_replace("/\s+/", "", $_POST['id']);
  $gender = $_POST['gender'];
  $name = preg_replace("/\s+/", "", $_POST['name']);
  $birthday = $_POST['birthday'];
  $email = preg_replace("/\s+/", "", $_POST['email']);  
  $password = preg_replace("/\s+/", "", $_POST['password']);
  $country = $_POST['country'];  
  $hint = preg_replace("/\s+/", "", $_POST['hint']);
  
  // password_hash();는 password.php에서 만들어놓은 함수를 갖다 쓰는 것
  // 비밀번호를 암호화해서 db에 저장 시키기 위함
  $password_code = password_hash($_POST['password'],PASSWORD_DEFAULT);
  // 아이디에 알파벳 소문자와 숫자로만 입력하도록 하는 코딩 ^a-z 0-9에서 ^는 NOT이라는 표현식
  $id_hangle_check = preg_match('/[^a-z 0-9]/u',$id);     
  if($id_hangle_check == 1){
    echo "<script>alert('아이디는 영문과 숫자로만 작성해주세요.'); location.href='../register.php';</script>";
    exit;
  }
  //password_check(); 는 passwordcheck.php 에서 만들어 놓은 함수를 갖다 쓰는 것
  //입력된 비밀번호가 대소문자/숫자/특수문자로 조합이 되었는지 안되었는지를 판단해준다.
  password_check($password);

  //입력받은 아이디가 현제 DB에 존재하는지를 확인해주는 역할이다. 중복체크 
  $id_check = "select * from members where id = '$id'";    
  $result =  $mysqli ->query($id_check);
    //만약에 동일 아이디가 존재하면 num_rows 의 값은 1이 됨 (1개의 db가 존재한다는 의미)
   if($result->num_rows ==1 ) {
     echo "<script>alert('이미 존재하는 아이디입니다.'); location.href='../register.php';</script>";
     exit;
   } 
   //위에 모든 조건을 만족하면 table에 회원정보를 입력하기 위함
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
