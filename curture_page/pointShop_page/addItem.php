<?php
    // include "../common/db.php";
    // if(!isset($_SESSION['id'])){
    // echo "<script>alert('로그인을 해야 이용할 수 있는 서비스입니다.'); location.href='../login_page/login.php';</script>";
    // }
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <title>게시글 읽기</title>
  <!-- CSS 스타일 가져오기 -->
  <link rel="stylesheet" href="../review_page/review_css/style.css">
  <link rel="stylesheet" href="../review_page/review_css/review_write.css">
  <!-- 자바스크립트 가져오기 -->
  <script src="js/main.js" defer></script>
  <?php include "../header/header.php"; ?>
  <style>
  .total{
    width:1200px;
    margin:0 auto;
  }
  </style>
</head>
<body>
<!-- clear : float 영역 지우기 -->

<div class="total">
<div class="review_banner">
  <h1>A D D I T E M</h1>
  <form action="./pointshop_check/pointshop_ok.php" method="post" enctype="multipart/form-data">
  <input type="submit" class="input_submit" name="submit" value="작성" >
</div>

<!--review container-->
<div class="review_main_container">
  <div class="review_use_container">
    <!--select-->
    <div class="option_box">
      <div class="select_box">
        <select name="type">
          <option value="" selected="">종류</option>
          <option value="food"">음식</option>
          <option value="plaing">놀거리</option>
          <option value="tripitem">여행용품</optioon>
          <option value="traffic">교통</optioon>
        </select>
      </div>

      <div class="input_function_box">
        <div class="input_img">
          <!-- <label for="input_image">
            <i class="fas fa-image"></i>
          </label>
          <input class="input_image" type="image" name="file" value="1" />
          <p>사진</p>
          <input type="file" name="" value=""> -->
        </div>
        <input type="file" name="file">
      </div>
    </div>

    <!--title-->
    <div class="title_box">
      <textarea class="textarea_title" name="name" placeholder="아이템 이름" style="height: 42px;"></textarea>
    </div>
    <!--text-area-->
    <div class="description_container">
      <input type="text" name="price" placeholder="가격">
    </div>
    </div>
  </form>
</div>
</div>
</div>
</body>
</html>
