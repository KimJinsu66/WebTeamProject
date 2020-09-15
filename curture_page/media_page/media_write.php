<?php
    include "../common/db.php";
    //한국 시간을 가져오기 위한 타임존 지정
    date_default_timezone_set("Asia/Seoul");

    if(!isset($_SESSION['id'])){
    echo "<script>alert('로그인을 해야 이용할 수 있는 서비스입니다.'); location.href='../login_page/login.php';</script>";
    }

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <title>글 쓰기</title>
  <!-- CSS 스타일 가져오기 -->
  <link rel="stylesheet" href="./media_css/media_write.css">
  <!-- 자바스크립트 가져오기 -->
  <script src="js/main.js" defer></script>
  <?php include "../header/header.php"; ?>
</head>
<body>
<!-- clear : float 영역 지우기 -->

<div class="container">
<div class="review_banner">
  <h1>R E V I E W</h1>
  <form action="./media_check/media_write_ok.php" method="post" enctype="multipart/form-data">
  <input type="submit" class="input_submit" name="submit" value="작성" >
</div>

<!--review container-->
<div class="review_main_container">
  <div class="review_use_container">
    <!--select-->
    <div class="option_box">
      <div class="select_box">
        <select name="select_country">
          <option value="" selected="">country</option>
          <option value="japan"">japan</option>
          <option value="korea">korea</option>
          <option value="USA">USA</optioon>
          <option value="china">china</optioon>
        </select>
        <select name="select_genre">
          <option value="" selected="">장르</option>
          <option value="movie">movie</option>
          <option value="drama">drama</option>
          <option value="animation">animation</optioon>
          <option value="variety.">variety.</optioon>
        </select>                
        <select name="select_year">          
          <option value="" selected="">년도</option>
          <?php          
          for($i=1990; $i<=date("Y"); $i++){ ?>          
          <option value="<?=$i?>"><?=$i?></optioon>
          <?php } ?>
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
      <textarea class="textarea_title" name="title" placeholder="제목을 입력하세요" style="height: 42px;"></textarea>
    </div>
    <!--text-area-->
    <div class="description_container">
      <textarea name="description" class="textarea_description" placeholder="500자 이내로 적어주세요"></textarea>
    </div>
    </div>
  </form>
</div>
</div>
</div>
</body>
</html>
