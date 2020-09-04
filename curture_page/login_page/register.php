
<!DOCTYPE html>
<html>
  <head>
    <script src="login_js/check_PW_Same.js"></script>
    <script src="login_js/check_power.js"></script>
    <meta charset="utf-8">
    <title>회원가입</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>일본페이지</title>
  <!-- 공용 스타일 -->
  <!-- 구글 폰트 -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
  rel="stylesheet">
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="image/png" href="http://localhost/curture_page/common/common_imgs/favicon.png">
  <!-- 폰트어썸 아이콘 가져오기 -->
  <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous"></script>
  <!-- 공용 스타일 -->

    <!-- 메인 레이아웃 CSS -->
    <link rel="stylesheet" href="login_css/mainTextAndreviewLayout.css">
    <!-- CSS 스타일 -->
    <link rel="stylesheet" href="login_css/register.css">
    <?php include "../header/header.php"?>
</head>
<body>
<form action="./login_check/register_ok.php" method="post" \>
  <div class="register_container">

  <div class="h1_box">
    <h1>회원가입</h1>
  </div>
  <div class="register_box">
    <div class="join_content">
      <div class="id_container">
        <h5>ID</h5>
        <input class="id" type="text" name="id" required>
      </div>
      <div class="pw_container">
        <h5>비밀번호</h5>
        <input type="password" name="password" id="pw" required onKeyup="isSame(),safetyPasswordPattern(this)" />
      </div>
      <div class="pw_confirm_power">
        <span id="makyText">:: 비밀번호를 입력해 주세요 ::</span>
      </div><br>
      <div class="pw_confirm_container">
        <h5>비밀번호 확인</h5>
        <input type="password" name="password_check" id="pwCheck" required onKeyup="isSame()"/>
      </div>
      <div class="pw_confirm_check">
        <span id="same"></span>
      </div>
  </div>
  <div class="user_information_box">
    <div class="radio_gender">
      <h5>성별</h5>
      <select class="select_gender" name="gender" required>
        <option value="" selected="">성별</option>
        <option value="M">남자</option>
        <option value="F">여자</option>
        <option value="U">선택안함</option>
      </select>
    </div>
    <div class="name_text">
      <h5>이름</h5>
      <input class="id_pass" type="text" name="name" required>
    </div>
    <div class="birthday_date">
      <h5>생년월일</h5>
      <input type="date" name="birthday" class="birthday_text" required>
    </div>
    <div class="email_input">
      <h5>email</h5>
      <input class="email" type="email" name="email" size="50" required>
    </div>

    <div class="country">
      <h5>country</h5>
      <select name="country" required>
        <option value="">나라</option>
        <option value="korea">korea</option>
        <option value="japan">japan</option>
      </select>
    </div>
    <div class="hint">
        <h5>힌트</h5>
        <input type="text" name="hint" placeholder="비밀번호 찾을 때 필요한 힌트를 적어주세요." required>
    </div>
  </div>
    <input class="register_button" type="submit" name="submit" value="register">
  </div>
</form>
</div>
<?php include "../footer/footer.php"?>
</body>
</html>
