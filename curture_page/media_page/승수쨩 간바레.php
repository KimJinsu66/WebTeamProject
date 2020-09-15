<?php
  include "../common/db.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>일본::엔터트립</title>
  <!-- 구글 폰트 -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
		rel="stylesheet">
	<!-- 페비콘 가져오기 -->
	<link rel="icon" type="image/png" href="imgs/favicon.png">
	<!-- 아이콘 가져오기 -->
	<script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous"></script>
	<!-- 부트스트랩 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- 헤더 CSS -->
	<link rel="stylesheet" href="css/contents.css">
	<!-- 제이쿼리 -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- 부트스트랩 JS -->
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  
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
      </div>
  </div>
    <div class="projects">
              <div class="row">
                  <?php
                    $sql = mq("select * from media");
                    $low = $sql -> num_rows;
                    for($i=0; $i<$low; $i++){
                      $result = $sql -> fetch_array();
                      $title = $result['media_title'];
                      $year = $result['media_year'];
                      $file = $result['media_file'];
                    ?>
                    <div class="col-lg-3 item movie">
                      <div class="card">
                          <div class="card-head">
                          <a href="#"><img src="./imgs/
                          poster/<?=$file?>"
                              alt="<?=$title?>" class="img-fluid card-img"></a>
                          </div>
                          <div class="card-body text-center">
                            <a href="#"><h4 class="title"><?=$title?></h4></a>
                              <h4 class="title">(<?=$year?>)</h4>
                              </a>
                          </div>
                      </div>
                  </div>
  <?php }?>
    </div>
  </div>
</div>
</body>
</html>