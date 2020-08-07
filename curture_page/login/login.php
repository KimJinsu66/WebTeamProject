<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
    <!-- 페비콘 가져오기 -->
    <link rel="icon" type="image/png" href="imgs/favicon.png">

    <!-- 폰트 어썸 백터 아이콘 가져오기 -->
    <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous">
    </script>

    <!-- 구글 폰트 가져오기 -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- HTML 속성 초기화 CSS 가져오기 -->
    <link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="css/login.css" />
    <!-- CSS 스타일 가져오기 -->
    <link rel="stylesheet" href="css/style.css">

    <!-- 자바스크립트 가져오기 -->
    <script src="js/main.js" defer></script>
  </head>

  <body>

  <header>
    <div class="top clear">
        <h1><a href="../home/index.html"><img src="imgs/banner.png" alt="엔터트립"></a></h1>
    </div>

    <div class="search-box">
        <input type="text" class="search-txt" name="검색창" placeholder="검색어를 입력해주세요">
        <a class="search-btn" href="#">
          <i class="fas fa-search"></i>
        </a>
      </div>

    <!-- 네비게이션 바  -->
    <!-- clear : float 영역 지우기 -->
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
              <li><a href="#">리뷰</a>
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
                      </ul>
                  </div>


            <!-- 로그인/회원가입/검색 -->
            <div class="login">
                <a href="../login/login.php">로그인</a>
                <a href="../login/register.php">회원가입</a>

            </div>


            </div>

      <!-- 로그인/회원가입/검색 -->



  </header>

    <div class = "login">
      <h1 class="login_header">로그인</h1>
      <div class="login_div">
      <form action="./check/login_ok.php" method="post">
      <div class="id_pw_textBox">
        <input class="id" type="text" name="id" placeholder="아이디를 입력해주세요.">
        <input class="password" type="password" name="password" placeholder="비밀번호를 입력해주세요.">
      </div>
      <div class="remember_id">
        <input type="checkbox" checked="checked" name="remember"> 아이디 저장
      </div>
        <input class="login_button" type="submit" name="submit" value="Login">
      <div class="user_find_register">
        <a href="#">아이디 찾기</a>  ㆍ
        <a href="#">비밀번호 찾기</a>  ㆍ
        <a href="../login/register.php">회원가입</a>
      </div>
    </form>
    </div>
  </body>
</html>
