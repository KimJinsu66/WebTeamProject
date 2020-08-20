<?php
  include "../common/db.php";
  include "review/lib/get_array.php";
  include "review/lib/modify_form.php";
  include "lib/get_genre.php";
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
  <style>
  .button_container{
    display:flex;
  }
  .button_container > div {
    text-align:center;
    width: 60px;
    margin: 10px;
    border:1px solid black;
    border-radius:1px;
  }
  div > a {
    width:60px;
  }
  .comment_container{
    border:1px solid black;
  }
  .modify_delete_container{
    display:flex;
    float:right;
  }
  .comment{
    clear:both;
  }
  .comment_container{
    text-align:left;
  }
  .main{
    border:1px solid black;
    width:1200px;
    margin:0 auto;
  }

  .comment_date{
    float:right;
  }
  .comment_delete{
    text-align:right;
    clear: both;
  }
  .comment_description{
    font-size:1.5em;
  }

  </style>
</head>
<body>
  <?php
  $sql = mq("select * from review where review_no = ".$_GET['review_no']."");
  $result = $sql -> fetch_array();
  $fillarray = get_array($result);
  ?>
  
  <div class="main">
    <!-- 게시글을 불러오는 함수  -->
    <div class="kategorie">
      <?php echo get_review_content($fillarray); ?>
    </div>


    <!-- 글쓴 사람에게만 글삭제 권한을 줄 수 있게 해주는 코드  -->

  </div>
</body>
</html>