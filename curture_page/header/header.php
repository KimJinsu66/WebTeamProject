<?php include "log_head.php";?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <!-- 공용 스타일 -->
  <!-- 구글 폰트 -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
  rel="stylesheet">
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="image/png" href="http://localhost/curture_page/common/common_imgs/favicon.png">
  <!-- 폰트어썸 아이콘 가져오기 -->
  <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous"></script>
  <!-- 공용 스타일 -->

<!-- 부트스트랩 CSS -->
<link rel="stylesheet" href="http://localhost/curture_page/common/common_css/bootstrap.min.css">
<!-- 제이쿼리 -->
<script src="http://localhost/curture_page/common/common_js/jquery-3.5.1.min.js"></script>
<!-- 부트스트랩 JS -->
<script src="http://localhost/curture_page/common/common_js/bootstrap.min.js"></script>


<!-- 헤더 CSS -->
<link rel="stylesheet" href="http://localhost/curture_page/header/header_css/header.css">
</head>
<body>
<!-- 헤더 -->
<header>
  <!-- 탑 컨테이너 -->
  <div class="container p-2">
    <div class="row justify-content-between align-items-center mx-auto">
      <!-- 검색바 -->
      <div class="col-md-4">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2 rounded-pill" type="text"
          placeholder="작품을 검색해보세요"><button class="btn btn-danger	my-2 my-sm-0
          rounded-circle"><i class="fas fa-search"></i></button>
        </form>
      </div>
      <!-- 로고 -->
      <div class="logo d-flex justify-content-center align-items-center col-md-4">
        <a href="http://localhost/curture_page/indes.php"><img src="http://localhost/curture_page/common/common_imgs/brand_logo.png" alt="엔터트립"></a>
      </div>
      <!-- 로그인 -->
      <div class="col-md-4 d-flex justify-content-end align-items-center">
  <?php  if(!$jb_login){ ?>
        <div class="mr-2">
          <button type="button" class="btn btn-danger" onclick = "location.href ='http://localhost/curture_page/login_page/login.php';">로그인</button>
        </div>
        <div class="ml-2">
          <button type="button" class="btn btn-outline-danger" onclick = "location.href = 'http://localhost/curture_page/login_page/register.php';">회원가입</button>
        </div> <?php } else {
          $id = $_SESSION['id'];
        //echo "님 환영합니다.";
        echo "<span class=\"badge badge-light\">$id 님 안녕하세요~!</span><br>";
        echo "<form action=\"http://localhost/curture_page/header/logout.php\" method=\"post\">
        <input class=\"btn btn-danger\" type=\"submit\" name=\"submit\" value=\"로그아웃\">
        </form>";
        ?>
        <div class="ml-2">
          <button type="button" class="btn btn-danger" onclick="location.href='http://localhost/curture_page/mypage_page/mypage.php';">Mypage</button>
        </div>
      <?php }  ?>
      </div>

    </div>
  </div>
  <!-- 네비게이션바 -->
  <nav class="navbar navbar-expand-lg mt-3">
    <div class="collapse navbar-collapse justify-content-center container">
      <ul class="navbar-nav text-center">
        <li class="nav-item mr-5 dropdown">
          <a class="nav-link dropdown-toggle px-0 py-0" href="#" data-toggle="dropdown">
            作品情報
          </a>
          <ul class="dropdown-menu country" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="http://localhost/curture_page/media_page/korea_media.php">
                <img src="http://localhost/curture_page/common/common_imgs/korea.png" alt="한국"> 한국</a></li>
              <li><a class="dropdown-item" href="http://localhost/curture_page/media_page/japan_media.php">
                <img src="http://localhost/curture_page/common/common_imgs/japan.png" alt="일본"> 일본</a></li>
              <li><a class="dropdown-item" href="http://localhost/curture_page/media_page/usa_media.php">
                <img src="http://localhost/curture_page/common/common_imgs/usa.png" alt="미국"> 미국</a></li>
              <li><a class="dropdown-item" href="http://localhost/curture_page/media_page/china_media.php">
                <img src="http://localhost/curture_page/common/common_imgs/china.png" alt="중국"> 중국</a></li>
              <li><a class="dropdown-item" href="http://localhost/curture_page/media_page/world_media.php">
                <img src="http://localhost/curture_page/common/common_imgs/world.png" alt="기타"> 기타</a></li>
          </ul>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link px-0 py-0" href="#">フリー掲示板</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link px-0 py-0" href="http://localhost/curture_page/review_page/review_page.php">レビュー</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link px-0 py-0" href="#">知らせ事項</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link px-0 py-0" href="#">カスタマーセンター</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link px-0 py-0" href="#">利用案内</a>
        </li>
      </ul>
    </div>
  </nav>


</header>
