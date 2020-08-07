<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

    .h1_box {
      text-align: center;
    }

    .register_container{
      margin: 0 auto;
      max-width: 768px;
      min-width: 540px;
    }

    .register_box {
      width: 460px;
      margin-left: 75px;

    }

    input {
      width: 600px;
      height: 50px;
    }

    select {
      width: 608px;
      height: 60px;
      font-size: 18px;
    }

    .birthday_text {
      width: 600px;
      height: 55px;
    }

    h3 {
      text-align: left;
      font-size: 20px;
    }

    .register_button {
      width:600px;
      height:50px;
      background:#e5236d;
      border: none;
      margin-top: 50px;
      color: white;
      font-size: 17px;
    }
    </style>
    <script src="./lib/check_PW_Same.js"></script>
    <script src="./lib/safetyPasswordPattern.js"></script>
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
        <input type="password" name="password" id="pw" onKeyup="isSame()"/>
      </div>
      <div class="pw_confirm_container">
        <h3>비밀번호 확인</h3>
        <input type="password" name="password" id="pwCheck" onKeyup="isSame()" />
      </div>
  </div>
  <div class="user_information_box">
    <div class="radio_gender">
      <h3>성별</h3>
      <select class="select_gender" name="">
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
