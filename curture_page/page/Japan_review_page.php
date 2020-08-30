<?php
  include "../common/db.php";
  include "review/lib/get_array_review.php";
  include "review/lib/commentWrite.php";
  include "review/lib/get_content.php";
  include "lib/get_genre.php";
  include "lib/make_paging.php";
  include "lib/make_paging_number2.php";
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>일본페이지</title>
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="titleImg" href="../home/imgs/favicon.png">
  <link rel="stylesheet" href="curture/css/curture_main.css">
  <link rel="stylesheet" href="curture/css/mainTextAndreviewLayout.css">

  <!-- 폰트 어썸 백터 아이콘 가져오기 -->
  <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous">
  </script>

  <!-- 구글 폰트 가져오기 -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- 자바스크립트 가져오기 -->

  <link rel="stylesheet" href="../header/css/bootstrap.min.css">
  <!-- 헤더 CSS -->
  <link rel="stylesheet" href="../header/css/header.css">
  <!-- 제이쿼리 -->
  <script src="../header/js/jquery-3.5.1.min.js"></script>
  <!-- 부트스트랩 JS -->
  <script src="../header/js/bootstrap.min.js"></script>
  <!-- <script src="../home/js/main.js" defer></script> -->


  <!--고정 headere-->

  <style>

    .iframe{
      width:1400px;
      margin:0 auto;
    }
    
  </style>

  <?php include "../header/header.php"; ?>
</head>
<body>

<div class= "img">
  <img src="curture/image/pic5.jpg">
    <div class= "content">
      <h1> 일본 </h1>
    </div>
</div>
<div class="iframe">
<iframe id="myFrame" src="./iframe.php" height="500px" width="1400px" frameborder="0" scrolling="auto"></iframe>
</div>
  </body>
</html>