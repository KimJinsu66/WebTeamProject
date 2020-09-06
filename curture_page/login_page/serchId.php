<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>아이디 찾기</title>
    <!-- CSS 스타일 가져오기 -->
    <link rel="stylesheet" href="./login_css/serchId.css">
    <!-- 헤더 -->
    <?php include "../header/header.php"?>
  </head>
  <body>
    <div class="serchId">
      <h1 class="serch_head">아이디 찾기</h1>
      <div class="serchId_div">
      <form action="./login_check/serchId_ok.php" method="post">
      <div class="serch_name">
        <input class="name" type="text" name="name" placeholder="이름을 입력해주세요." required>
      </div>
      <div class="serch_email">
        <input class="email" type="email" name="email" placeholder="email을 입력해주세요." required>
      </div>
        <input class="serch_submit" type="submit" name="submit" value="찾기">
      </form>
    </div>
    </div>
    <?php include "../footer/footer.php"?>
  </body>
</html>
