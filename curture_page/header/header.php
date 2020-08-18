<?php
  include "log_head.php";

?>
<header>
  <div class="top clear">
      <h1><a href="../home/index.php" height="5" width"10"><img src="http://localhost/WebTeamProject/curture_page/page/imgs/banner.png" alt="엔터트립"></a></h1>
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
                  <li><a href="http://localhost/WebTeamProject/curture_page/page/Japan_review_page.php">일본</a></li>
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

              <li><a href="#">BEST리뷰</a>
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
            <?php

            if(!$jb_login){
              echo "<a href=\"http://localhost/WebTeamProject/curture_page/login/login.php\">로그인</a>";
              echo "<a href=\"http://localhost/WebTeamProject/curture_page/login/register.php\">회원가입</a>";
            } else {
              $id = $_SESSION['id'];
              //echo "님 환영합니다.";
              echo "<form action=\"../header/logout.php\" method=\"post\">
              <input type=\"text\" style=\"width:180px;height:14px;font-size:14px;\" value=\"$id 님 환영합니다\" readonly>
              <input type=\"submit\" name=\"submit\" value=\"로그아웃\">
              </form>";
          } ?>
          <!--<a href="../login/.php">마이페이지</a>-->
          </div>
      </div>

    <!-- 로그인/회원가입/검색 -->

</header>
