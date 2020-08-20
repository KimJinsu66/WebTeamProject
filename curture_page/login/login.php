<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
    <!-- 페비콘 가져오기 -->
    <link rel="icon" type="titleImg" href="../home/imgs/favicon.png">

    <!-- 폰트 어썸 백터 아이콘 가져오기 -->
    <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous">
    </script>

    <!-- 구글 폰트 가져오기 -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- HTML 속성 초기화 CSS 가져오기 -->

    <link rel="stylesheet" href="css/login.css" />
    <!-- CSS 스타일 가져오기 -->
    <link rel="stylesheet" href="css/style.css">

    <!-- 자바스크립트 가져오기 -->

    <link rel="stylesheet" href="../header/css/bootstrap.min.css">
    <!-- 헤더 CSS -->
    <link rel="stylesheet" href="../header/css/header.css">
    <!-- 제이쿼리 -->
    <script src="../header/js/jquery-3.5.1.min.js"></script>
    <!-- 부트스트랩 JS -->
    <script src="../header/js/bootstrap.min.js"></script>

     <?php include "../header/header.php"

      ?>
  </head>

  <body>



    <div class = "login">
      <h1 class="login_header">로그인</h1>
      <div class="login_div">
      <form action="./check/login_ok.php" method="post">
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
        <a href="../login/register.php">회원가입</a>
      </div>
    </form>
    </div>
  </div>
  </body>
</html>
