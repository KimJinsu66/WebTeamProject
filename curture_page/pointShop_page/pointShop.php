<?php
  include "../common/db.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>엔터트립</title>
   
	<!-- 헤더 CSS -->
    <link rel="stylesheet" href="../media_page/media_css/media.css">
    <style>
        .search_button_box{
            margin-top:0;
        }
    </style>
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
              <li data-filter=".food"><a href="#!">음식</a></li>
              <li data-filter=".plaing"><a href="#!">놀거리</a></li>
              <li data-filter=".tripitem"><a href="#!">여행용품</a></li>
              <li data-filter=".traffic"><a href="#!">교통</a></li>
          </ul>
          <div class="col-sm-12 mb-3">
            <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()"
            placeholder="作品を検索してください">
          </div>
          <div class="search_button_box">
              <a type="button" href="./addItem.php" target="_top" class="btn btn-primary">글쓰기</a>
          </div>
          <div class="projects">
              <div class="row">
              <?php
              $sql = mq("select * from itemshop");
              $low = $sql -> num_rows;
              for($i=0; $i<$low; $i++){
              $result = $sql -> fetch_array();
              ?>
                  <div class="col-lg-3 item <?=$result['item_type']?>">
                      <div class="card">
                          <div class="card-head">
                          <a href="#"><img src="./pointshop_imgs/<?=$result['item_img']?>"
                              class="img-fluid card-img"></a>
                          </div>
                          <div class="card-body text-center">
                            <a href="#"><h4 class="title"><?=$result['item_name']?></h4></a>
                              <h4 class="title"><?=$result['item_price']?></h4>
                              </a>
                          </div>
                      </div>
                  </div>
                  <?php } ?>                              
              </div>              
          </div>          
      </div>
  </div>
</div>
<!-- 필터 -->
<script src="../media_page/media_js/isotope.min.js"></script>
<script src="../media_page/media_js/script.js"></script>
<?php include "../footer/footer.php"?>
</body>
</html>



