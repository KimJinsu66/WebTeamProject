<?php
    include "../common/db.php";
    if(!isset($_SESSION['id'])){
    echo "<script>alert('로그인을 해야 이용할 수 있는 서비스입니다.'); location.href='../login_page/login.php';</script>";
    }
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <title>게시글 읽기</title>
  <!-- CSS 스타일 가져오기 -->
  <link rel="stylesheet" href="./review_css/style.css">
  <link rel="stylesheet" href="./review_css/review_write.css">
  <!-- 자바스크립트 가져오기 -->
  <script src="js/main.js" defer></script>
  <?php include "../header/header.php"; ?>
</head>
<body>
<!-- clear : float 영역 지우기 -->


<div class="review_banner">
  <h1>R E V I E W</h1>
  <form action="./review_check/review_ok.php" method="post" enctype="multipart/form-data">
  <input type="submit" class="input_submit" name="submit" value="작성" >
</div>

<!--review container-->
<div class="review_main_container">
  <div class="review_use_container">
    <!--select-->
    <div class="option_box">
      <div class="select_box">
        <select name="select_country">
          <option value="" selected="">国</option>
          <option value="한국"">日本</option>
          <option value="일본">韓国</option>
          <option value="미국">アメリカ</optioon>
          <option value="기타">中国</optioon>
        </select>
        <select name="select_genre">
          <option value="" selected="">タイプ</option>
          <option value="영화">映画</option>
          <option value="드라마">ドラマ</option>
          <option value="애니메이션">アニメイシヨン</optioon>
          <option value="예능">芸能</optioon>
        </select>
        <select name="select_kategorie">
          <option value="" selected="">カテゴリー</option>
          <option value="음식">食べ物</option>
          <option value="장소">場所</option>
          <option value="놀거리">遊び物</optioon>
        </select>
        
        <input list="browsers" name="genre_title" id="browser" placeholder="선택or검색">
          <datalist id="browsers" name="genre_title">
            <option value="あの頃君を追いかけた ネタバレ">
            <option value="逃げるは恥だが役に立つ">
            <option value="半沢直樹">
            <option value="君の名前">
            <option value="한것도없는데벌써3시">
            <option value="망했다">
          </datalist>

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
      <textarea class="textarea_title" name="title" placeholder="タイトルを入力してください" style="height: 42px;"></textarea>
    </div>
    <!--text-area-->
    <div class="description_container">
      <textarea name="description" class="textarea_description" placeholder="500文字以内で入力してください"></textarea>
    </div>
    </div>
  </form>
</div>
</div>
</body>
</html>
