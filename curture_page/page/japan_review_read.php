<?php
  include "../common/db.php";
  include "review/lib/get_array.php";
  include "review/lib/comment_lib.php";
  include "review/lib/get_review_content.php";
  include "lib/get_genre.php";
  include "lib/make_paging.php";
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>일본페이지</title>
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="titleImg" href="../home/imgs/favicon.png">
  <link rel="stylesheet" href="curture/css/mainTextAndreviewLayout.css">

  <link rel="stylesheet" href="curture/css/curture_main.css">

  <!-- 폰트 어썸 백터 아이콘 가져오기 -->
  <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous">
  </script>
 
  <!-- 구글 폰트 가져오기 -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../home/css/default.css" />
  <link rel="stylesheet" href="../header/style.css">

  <!-- <script src="../home/js/main.js" defer></script> -->

  <!--고정 headere-->
  <?php include "../header/header.php"; ?>
  
</head>
<body>

  <?php
  $sql = mq("select * from review where review_no = ".$_GET['review_no']."");
  $result = $sql -> fetch_array();
  $fillarray = get_array($result);?>

  <div class="main">
    <div class="kategorie">
      <?php echo get_review_content($fillarray); ?>
    </div>
    <div class="title"></div>
    <div class=""></div>
  </div>
</body>
</html>