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
  
    <!-- CSS 스타일 가져오기 -->
    <link rel="stylesheet" href="./login_css/serchPw.css">
    <?php include "../header/header.php"?>
  </head>
  <body>
    <div class="serchPw">
      <h1 class="serch_head">비밀번호 찾기</h1>
      <div class="serchPw_div">
      <form action="./check/serchPw_ok.php" method="post">
      <div class="serch_id">
        <input class="id" type="text" name="id" placeholder="ID를 입력해주세요." required>
      </div>
      <div class="serch_hint">
        <input class="hint" type="text" name="hint" placeholder="hint를 입력해주세요." required>
      </div>
        <input class="serch_submit" type="submit" name="submit" value="찾기">
      </form>
    </div>
    </div>
    <?php include "../footer/footer.php"?>
  </body>
</html>
