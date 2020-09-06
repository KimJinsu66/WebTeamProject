<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>비밀번호 찾기</title>
    <!-- CSS 스타일 가져오기 -->
    <link rel="stylesheet" href="./login_css/serchPw.css">
    <!-- 헤더 -->
    <?php include "../header/header.php"?>
  </head>
  <body>
    <div class="serchPw">
      <h1 class="serch_head">비밀번호 찾기</h1>
      <div class="serchPw_div">
      <form action="./login_check/serchPw_ok.php" method="post">
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
