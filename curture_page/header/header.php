<?php include "log_head.php";?>
<!DOCTYPE html>
<html lang="ko">

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
        <a href="../home/index.php"><img src="imgs/brand_logo.png" alt="엔터트립"></a>
      </div>
      <!-- 로그인 -->
      <div class="col-md-4 d-flex justify-content-end align-items-center">
  <?php  if(!$jb_login){ ?>
        <div class="mr-2">
          <button type="button" class="btn btn-danger" onclick = "location.href = '../login/login.php'">로그인</button>
        </div>
        <div class="ml-2">
          <button type="button" class="btn btn-outline-danger" onclick = "location.href = '../login/register.php'">회원가입</button>
        </div> <?php } else {
          $id = $_SESSION['id'];
        //echo "님 환영합니다.";
        echo "<form action=\"../header/logout.php\" method=\"post\">
        <input type=\"text\" style=\"width:180px;height:14px;font-size:14px;\" value=\"$id 님 환영합니다\" readonly>
        <input type=\"submit\" name=\"submit\" value=\"로그아웃\">
        </form>";

        }  ?>
      </div>

    </div>
  </div>
  <!-- 네비게이션바 -->
  <nav class="navbar navbar-expand-lg mt-3">
    <div class="collapse navbar-collapse justify-content-center container">
      <ul class="navbar-nav text-center">
        <li class="nav-item mr-5 dropdown">
          <a class="nav-link dropdown-toggle px-0 py-0" href="#" data-toggle="dropdown">
            작품정보
          </a>
          <ul class="dropdown-menu country" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">
                <img src="imgs/korea.png" alt="한국"> 한국</a></li>
              <li><a class="dropdown-item" href="../page/japan_review_page.php?page=1">
                <img src="imgs/japan.png" alt="일본"> 일본</a></li>
              <li><a class="dropdown-item" href="#">
                <img src="imgs/usa.png" alt="미국"> 미국</a></li>
              <li><a class="dropdown-item" href="#">
                <img src="imgs/china.png" alt="중국"> 중국</a></li>
              <li><a class="dropdown-item" href="#">
                <img src="imgs/world.png" alt="기타"> 기타</a></li>
          </ul>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link px-0 py-0" href="#">자유게시판</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link px-0 py-0" href="../page/Japan_review_page.php">리뷰게시판</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link px-0 py-0" href="#">공지사항</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link px-0 py-0" href="#">고객센터</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link px-0 py-0" href="#">이용안내</a>
        </li>
      </ul>
    </div>
  </nav>


</header>
