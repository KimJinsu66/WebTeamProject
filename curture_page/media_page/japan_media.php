<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>엔터트립</title>
   
	<!-- 헤더 CSS -->
	<link rel="stylesheet" href="./media_css/media.css">
</head>
<body>
  <!-- 헤더 -->
  <?php include "../header/header.php"?>

  <!-- 점보트론 -->
  <!-- <div class="jbcontainer">
      <div class="jumbotron">
        <h1 class="countrytitle text-center">일본</h1>
      </div>
  </div> -->

<!-- 미디어 -->
<div class="container">
  <div class="row">
      <div class="col-lg-12">
          <ul class="filters text-center">
              <li class="active" data-filter="*"><a href="#!">All</a></li>
              <li data-filter=".movie"><a href="#!">영화</a></li>
              <li data-filter=".drama"><a href="#!">드라마</a></li>
              <li data-filter=".variety"><a href="#!">예능</a></li>
              <li data-filter=".anime"><a href="#!">애니메이션</a></li>
          </ul>
          <div class="col-sm-12 mb-3">
            <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()"
            placeholder="작품 이름을 검색해주세요">
          </div>
          <div class="projects">
              <div class="row">
                  <div class="col-lg-3 item movie">
                      <div class="card">
                          <div class="card-head">
                          <a href="#"><img src="./media_imgs/그 시절 우리가 좋아했던 소녀.jpg"
                              alt="그 시절 우리가 좋아했던 소녀" class="img-fluid card-img"></a>
                          </div>
                          <div class="card-body text-center">
                            <a href="#"><h4 class="title">그 시절 우리가 좋아했던 소녀</h4></a>
                              <h4 class="title">(2018)</h4>
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 item drama">
                      <div class="card">
                          <div class="card-head">
                              <img src="./media_imgs/도망치는건 부끄럽지만 도움이 된다.jpg"
                              alt="도망치는건 부끄럽지만 도움이 된다" class="img-fluid card-img">
                          </div>
                          <div class="card-body text-center">
                              <h4 class="title">도망치는건 부끄럽지만 도움이 된다</h4>
                              <h4 class="title">(2016)</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 item drama">
                      <div class="card">
                          <div class="card-head">
                              <img src="./media_imgs/한자와 나오키.jpg"
                              alt="한자와 나오키" class="img-fluid card-img">
                          </div>
                          <div class="card-body text-center">
                              <h4 class="title">한자와 나오키</h4>
                              <h4 class="title">(2013)</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 item anime">
                      <div class="card">
                          <div class="card-head">
                              <img src="./media_imgs/너의 이름은.jpg"
                              alt="너의 이름은" class="img-fluid card-img">
                          </div>
                          <div class="card-body text-center">
                              <h4 class="title">너의 이름은</h4>
                              <h4 class="title">(2016)</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 item anime">
                      <div class="card">
                          <div class="card-head">
                              <img src="./media_imgs/목소리의 형태.jpg"
                              alt="목소리의 형태" class="img-fluid card-img">
                          </div>
                          <div class="card-body text-center">
                              <h4 class="title">목소리의 형태</h4>
                              <h4 class="title">(2016)</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 item movie">
                      <div class="card">
                          <div class="card-head">
                              <img src="./media_imgs/아사히나구.jpg"
                              alt="아사히나구" class="img-fluid card-img">
                          </div>
                          <div class="card-body text-center">
                              <h4 class="title">아사히나구</h4>
                              <h4 class="title">(2017)</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 item drama">
                    <div class="card">
                        <div class="card-head">
                            <img src="./media_imgs/고독한미식가 7.jpg"
                            alt="고독한미식가 7" class="img-fluid card-img">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="title">고독한미식가 시즌7</h4>
                            <h4 class="title">(2018)</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 item movie">
                  <div class="card">
                      <div class="card-head">
                          <img src="./media_imgs/러브레터.jpg"
                          alt="러브레터" class="img-fluid card-img">
                      </div>
                      <div class="card-body text-center">
                          <h4 class="title">러브레터</h4>
                          <h4 class="title">(1995)</h4>
                      </div>
                  </div>
              </div>
              <!--  -->
              </div>
          </div>
      </div>
  </div>
</div>
<!-- 필터 -->
<script src="./media_js/isotope.min.js"></script>
<script src="./media_js/script.js"></script>
<?php include "../footer/footer.php"?>
</body>
</html>



