<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/serchId.css">
  </head>
  <body>
    <div class="serchId">
      <h1 class="serch_head">아이디 찾기</h1>
      <div class="serchId_div">
      <form action="./check/serchId_ok.php" method="post">
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
  </body>
</html>
