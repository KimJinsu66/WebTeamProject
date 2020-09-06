<?php
    include "../common/db.php";
    if(isset($_SESSION['id'])){
    echo "<script>alert('로그인 되었습니다.'); location.href='../indes.php';</script>";
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
    <!-- 로그인 CSS 스타일 가져오기 -->
    <link rel="stylesheet" href="login_css/login.css" />
    <!-- 헤더 -->
    <?php include "../header/header.php"?>
  </head>
  <body>
    <div class = "login">
      <h1 class="login_header">로그인</h1>
      <div class="login_div">
      <form action="./login_check/login_ok.php" method="post">
      <div class="id_pw_textBox">
        <input class="id" type="text" name="id" placeholder="아이디를 입력해주세요." required>
        <input class="password" type="password" name="password" placeholder="비밀번호를 입력해주세요." required>
      </div>
      <div class="remember_id">
        <input type="checkbox" checked="checked" name="remember"> 아이디 저장
      </div>
        <input class="login_button" type="submit" name="submit" value="Login">
      <div class="user_find_register">
        <a href="serchid.php">아이디 찾기</a>  ㆍ
        <a href="serchPw.php">비밀번호 찾기</a>  ㆍ
        <a href="register.php">회원가입</a>
      </div>
    </form>
    </div>
  </div>
  <?php include "../footer/footer.php"?>
  </body>
</html>
