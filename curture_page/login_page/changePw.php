<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  <!-- 공용 스타일 -->
  <!-- 구글 폰트 -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
  rel="stylesheet">
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="image/png" href="http://localhost/curture_page/common/common_imgs/favicon.png">
  <!-- 폰트어썸 아이콘 가져오기 -->
  <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous"></script>
  <!-- 공용 스타일 -->

<!-- CSS스타일 -->
    <link rel="stylesheet" href="./login_css/changePw.css">
  </head>
  <body>
    <div class="changePw">
      <h1 class="change_head">비밀번호 변경</h1>
      <div class="changePw_div">
      <form action="./check/changePw_ok.php" method="post">
      <div class="changePw_pw">
        <input class="pw" type="password" name="pw" placeholder="변경할 비밀번호를 입력해주세요." required>
      </div>
      <div class="changePw_re_pw">
        <input class="re_pw" type="password" name="re_pw" placeholder="비밀번호를 한번더 입력해주세요." required>
      </div>
        <input class="change_submit" type="submit" name="submit" value="변경">
      </form>
    </div>
    </div>
    <?php include "../footer/footer.php"?>
  </body>
</html>
