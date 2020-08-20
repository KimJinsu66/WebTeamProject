
<!DOCTYPE html>
<html>
  <head>
    <script src="js/check_PW_Same.js"></script>
    <script src="js/check_power.js"></script>
    <meta charset="utf-8">
    <title>회원가입</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>일본페이지</title>
    <!-- 페비콘 가져오기 -->
    <link rel="icon" type="titleImg" href="../home/imgs/favicon.png">
    <link rel="stylesheet" href="./css/mainTextAndreviewLayout.css">


    <!-- 폰트 어썸 백터 아이콘 가져오기 -->
    <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous">
    </script>

    <!-- 구글 폰트 가져오기 -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../header/style.css">
    <link rel="stylesheet" href="css/register.css">
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




<form action="./check/register_ok.php" method="post" \>
  <div class="register_container">

  <div class="h1_box">
    <h1>회원가입</h1>
  </div>
  <div class="register_box">
    <div class="join_content">
      <div class="id_container">
        <h3>ID</h3>
        <input class="id" type="text" name="id">
      </div>
      <div class="pw_container">
        <h3>비밀번호</h3>
        <input type="password" name="password" id="pw" onKeyup="isSame(),safetyPasswordPattern(this)" />
      </div>
      <div class="pw_confirm_power">
        <span id="makyText">:: 비밀번호를 입력해 주세요 ::</span>
      </div>
      <div class="pw_confirm_container">
        <h3>비밀번호 확인</h3>
        <input type="password" name="password_check" id="pwCheck" onKeyup="isSame()"/>
      </div>
      <div class="pw_confirm_check">
        <span id="same"></span>
      </div>
  </div>
  <div class="user_information_box">
    <div class="radio_gender">
      <h3>성별</h3>
      <select class="select_gender" name="gender">
        <option value="" selected="">성별</option>
        <option value="M">남자</option>
        <option value="F">여자</option>
        <option value="U">선택안함</option>
      </select>
    </div>
    <div class="name_text">
      <h3>이름</h3>
      <input class="id_pass" type="text" name="name">
    </div>
    <div class="birthday_date">
      <h3>생년월일</h3>
      <input type="date" name="birthday" class="birthday_text" >
    </div>
    <div class="email_input">
      <h3>email</h3>
      <input class="email" type="email" name="email" size="50">
    </div>

    <div class="country">
      <h3>country</h3>
      <select name="country">
        <option value="korea">korea</option>
        <option value="japan">japan</option>
      </select>
    </div>
  </div>
    <input class="register_button" type="submit" name="submit" value="register">

  </div>
</form>
</div>

</body>
</html>
