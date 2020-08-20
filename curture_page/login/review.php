<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <title></title>
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="image/png" href="imgs/favicon.png">

  <!-- 폰트 어썸 백터 아이콘 가져오기 -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
  integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
  crossorigin="anonymous" />

  <!-- 구글 폰트 가져오기 -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- HTML 속성 초기화 CSS 가져오기 -->
  <link rel="stylesheet" href="css/default.css" />

  <!-- CSS 스타일 가져오기 -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./css/review.css">
  <link rel="stylesheet" href="../header/css/bootstrap.min.css">
  <!-- 헤더 CSS -->
  <link rel="stylesheet" href="../header/css/header.css">
  <!-- 제이쿼리 -->
  <script src="../header/js/jquery-3.5.1.min.js"></script>
  <!-- 부트스트랩 JS -->
  <script src="../header/js/bootstrap.min.js"></script>
  
  <!-- 자바스크립트 가져오기 -->
  <script src="js/main.js" defer></script>
</head>
<body>
<!-- clear : float 영역 지우기 -->
<div class="layout_wrap">
  <header class="top-header">
    <div class="top-banner">
      <div class="group-flex">
        <div class="top">
          <h1><a href=""><img src="imgs/banner.png" alt="엔터트립"></a></h1>
        </div>
        <div class="search-box">
          <input type="text" class="search-txt" name="검색창" placeholder="검색어를 입력해주세요">
          <a class="search-btn" href="#">
            <i class="fas fa-search"></i>
          </a>
        </div>
      </div>
    </div>
<!-- 네비게이션 바  -->
    <div class="btm clear ">
      <div id="menu1">
      <ul class="main">
        <li><a href="#">국가</a>
        <div class = "menu2">
          <ul class="sub">
            <li><a href="#"><p>아시아</p></a></li>
            <li><a href="#">한국</a></li>
            <li><a href="../country/curture_main.php">일본</a></li>
          </ul>
          <ul class="sub">
            <li><a href="#"><p>북아메리카</p></a></li>
            <li><a href="#">Canada</a></li>
            <li><a href="#">U.S.A</a></li>
          </ul>
          <ul class="sub">
            <li><a href="#"><p>남아메리카</p></a></li>
            <li><a href="#">Brazil</a></li>
            <li><a href="#">칠레</a></li>
          </ul>
          <ul class="sub">
            <li><a href="#"><p>유럽</p></a></li>
            <li><a href="#">프랑스</a></li>
            <li><a href="#">이탈리아</a></li>
          </ul>
        </div>
        </li>
        <li><a href="#">미디어</a>
          <div class="menu2">
            <ul class="sub">
              <li><a href="#"><p>영화</p></a></li>
              <li><a href="#">SUB</a></li>
              <li><a href="#">SUB</a></li>
            </ul>
            <ul class="sub">
              <li><a href="#"><p>애니메이션</p></a></li>
              <li><a href="#">SUB</a></li>
              <li><a href="#">SUB</a></li>
            </ul>
            <ul class="sub">
              <li><a href="#"><p>드라마</p></a></li>
              <li><a href="#">SUB</a></li>
              <li><a href="#">SUB</a></li>
            </ul>
            <ul class="sub">
              <li><a href="#"><p>다큐</p></a></li>
              <li><a href="#">SUB</a></li>
              <li><a href="#">SUB</a></li>
            </ul>
          </div>
        </li>
        <li><a href="../login/review_read.php">리뷰</a>
          <div class="menu2">
            <ul class="sub">
              <li><a href="#"><p>SUB</p></a></li>
              <li><a href="#">SUB</a></li>
              <li><a href="#">SUB</a></li>
            </ul>
            <ul class="sub">
              <li><a href="#"><p>SUB</p></a></li>
              <li><a href="#">SUB</a></li>
              <li><a href="#">SUB</a></li>
            </ul>
            <ul class="sub">
              <li><a href="#"><p>SUB</p></a></li>
              <li><a href="#">SUB</a></li>
              <li><a href="#">SUB</a></li>
            </ul>
            <ul class="sub">
              <li><a href="#"><p>SUB</p></a></li>
              <li><a href="#">SUB</a></li>
              <li><a href="#">SUB</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#">건의사항</a>
          <div class="menu2">
            <ul class="sub">
              <li><a href="#"><p>SUB</p></a></li>
              <li><a href="#">SUB</a></li>
              <li><a href="#">SUB</a></li>
            </ul>
            <ul class="sub">
              <li><a href="#"><p>SUB</p></a></li>
              <li><a href="#">SUB</a></li>
              <li><a href="#">SUB</a></li>
            </ul>
            <ul class="sub">
              <li><a href="#"><p>SUB</p></a></li>
              <li><a href="#">SUB</a></li>
              <li><a href="#">SUB</a></li>
            </ul>
            <ul class="sub">
              <li><a href="#"><p>SUB</p></a></li>
              <li><a href="#">SUB</a></li>
              <li><a href="#">SUB</a></li>
            </ul>
          </div>
        </li>
      </div>
      <!-- 로그인/회원가입/검색 -->
      <div class="login">
        <a href="../login/login.php">로그인</a>
        <a href="../login/register.php">회원가입</a>
      </div>
    </div>

</header>

<div class="review_banner">
  <h1>R I V E W</h1>
  <form action="./check/review_ok.php" method="post" enctype="multipart/form-data">
  <input type="submit" class="input_submit" name="submit" value="작성" >
</div>

<!--review container-->
<div class="review_main_container">
  <div class="review_use_container">
    <!--select-->
    <div class="option_box">
      <div class="select_box">
        <select name="select_genre">
          <option value="" selected="">장르</option>
          <option value="영화">영화</option>
          <option value="드라마">드라마</option>
          <option value="애니메이션">애니메이션</optioon>
          <option value="다큐">다큐</optioon>
        </select>
        <select name="select_kategorie">
          <option value="" selected="">카테고리</option>
          <option value="음식">음식</option>
          <option value="장소">장소</option>
          <option value="놀거리">놀거리</optioon>
        </select>
      </div>

      <div class="input_function_box">
        <div class="input_img">
          <label for="input_image">
            <i class="fas fa-image"></i>
          </label>
          <input class="input_image" type="image" name="file" value="1" />
          <p>사진</p>
        </div>
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
</body>
</html>
