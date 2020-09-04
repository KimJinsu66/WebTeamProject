<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
  <!-- 공용 스타일 -->
  <!-- 구글 폰트 -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
  rel="stylesheet">
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="image/png" href="http://localhost/curture_page/common/common_imgs/favicon.png">
  <!-- 폰트어썸 아이콘 가져오기 -->
  <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous"></script>
  <!-- 공용 스타일 -->

    <!-- 로그인 CSS 스타일 가져오기 -->
    <link rel="stylesheet" href="login_css/login.css" />
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
