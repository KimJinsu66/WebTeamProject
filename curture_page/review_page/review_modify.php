<?php
  include "../common/db.php";
  include "review_lib/get_array_review.php";
  include "review_lib/modify_form.php";
  include "review_lib/get_genre.php";
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>일본페이지</title>
  <link rel="stylesheet" href="curture/css/mainTextAndreviewLayout.css">

  <link rel="stylesheet" href="curture/css/curture_main.css">

  <!-- review_modify_page css -->
  <link rel="stylesheet" href="./review_css/review_modify.css">
  <!--고정 headere-->
  <?php include "../header/header.php"; ?>

</head>
<body>
  <?php
  $sql = mq("select * from review where review_no = ".$_GET['review_no']."");
  $result = $sql -> fetch_array();
  $fillarray = get_array_review($result);
  ?>
  
  <div class="main">
    <!-- 게시글을 불러오는 함수  -->
    <div class="kategorie">
      <?php echo modify_form($fillarray); ?>
    </div>


    <!-- 글쓴 사람에게만 글삭제 권한을 줄 수 있게 해주는 코드  -->

  </div>
</body>
</html>