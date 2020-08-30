<?php
  include "../common/db.php";
  include "review/lib/get_array_review.php";
  include "review/lib/commentWrite.php";
  include "review/lib/get_content.php";
  include "lib/get_genre.php";
  include "lib/make_paging.php";
  include "lib/make_paging_number2.php";
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>일본페이지</title>
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="titleImg" href="../home/imgs/favicon.png">
  <link rel="stylesheet" href="curture/css/curture_main.css">
  <link rel="stylesheet" href="curture/css/mainTextAndreviewLayout.css">

  <!-- 폰트 어썸 백터 아이콘 가져오기 -->
  <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous">
  </script>

  <!-- 구글 폰트 가져오기 -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- 자바스크립트 가져오기 -->

  <link rel="stylesheet" href="../header/css/bootstrap.min.css">
  <!-- 헤더 CSS -->
  <link rel="stylesheet" href="../header/css/header.css">
  <!-- 제이쿼리 -->
  <script src="../header/js/jquery-3.5.1.min.js"></script>
  <!-- 부트스트랩 JS -->
  <script src="../header/js/bootstrap.min.js"></script>
  <!-- <script src="../home/js/main.js" defer></script> -->
 
  <!--고정 headere-->

  <style>

    #paging{
      text-align:center;
      margin-top:60px;
    }

    .review_title {
      display: inline-block;
      width: 200px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; 
    }    
    
  </style>

<!--genre 부분을 가져오는 함수  -->
<?php echo get_genre(); ?>


<div class="main-container">
  <div class="dropdown">
    <button class="dropbtn">카테고리선택</button>
    <div class="dropdown-content">
      <?php if(isset($_GET['genre'])){ ?>
      <a href="iframe.php?genre=<?=$_GET['genre']?>&kategorie=음식&page=1">음식</a>
      <a href="iframe.php?genre=<?=$_GET['genre']?>&kategorie=장소&page=1">장소</a>
      <a href="iframe.php?genre=<?=$_GET['genre']?>&kategorie=놀거리&page=1">놀거리</a>
    <?php } else {?>
      <a href="iframe.php?kategorie=음식&page=1">음식</a>
      <a href="iframe.php?kategorie=장소&page=1">장소</a>
      <a href="iframe.php?kategorie=놀거리&page=1">놀거리</a>
    <?php } ?>
    </div>
  </div>
  <div class="main">
    <div class="main_title">
    review
    </div>
    <div class="main_subtitle">
      여기는 회원분들의 리뷰를 볼 수 있는 곳입니다. 매너있게 사용해주세요~!
    </div>
  </div>
  <form method="post">
    <div class="search">    <!--장르를 선택하고 검색하기 위해서 사용되는 form 태그-->    
      <div class="search_title">
        <input type="text" class="search_title_text" name="search_title" width="30px;" height="30px;" placeholder="찾으시는 키워드를 입력해주세요">
        <input type="submit" class="search_submit" name="submit" value="검색">
      </div>
      <div class="search_button_box">
        <a type="button" href="review/review.php" target="_top" class="btn btn-primary">글쓰기</a>
        <a type="button" href="iframe.php"  class="btn btn-primary">홈으로</a>
      </div>
    </div>
  </form>
    <div class="total">
    <?php
      // genre 와 kategorie 값이 없을경우 , 즉 처음에 화면 들어왔을때 모든 게시판이 보이도록 (limit 사용해서 최대 5개 ) 해주는 코딩
    if(!isset($_GET['genre']) && !isset($_GET['kategorie'])){
      // 페이징 만들어주는 함수 @@ 검색있을 때랑 없을 경우 
      if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
      }else{
          //페이지 값이 없으면 1로 초기화
        $page = 1;
      }
      // 페이지에 출력할 레코드 수
      $numView = 10;
      //LIMIT 인덱스 순서를 정해줄때 사용
      $firstLimitValue = ($numView * $page) - $numView;
      $search_title="";
      if(isset($_POST['search_title'])){       
        $sql = mq("SELECT * FROM review WHERE title LIKE '%{$_POST['search_title']}%' ORDER BY review_no DESC");                
        $search_title = $_POST['search_title'];
        $num = 1;
      } else {
        // 변수 page값에 따른 LIMIT의 첫번째 값 계산
        $sql = mq("SELECT * FROM review ORDER BY review_no DESC LIMIT {$firstLimitValue}, {$numView}");        
        $num = 2;
      } 
      $low = $sql -> num_rows;
      for($i=1; $i<=$low; $i++){
        $result =$sql -> fetch_array();      
        //result5에 fetch_array된 필드와 데이타들을 fillarray에 각 필드명별로 인덱스를 만들어서 데이터를 저장시키는 함수
        $fillarray = get_array_review($result); ?>
        <!--게시판에 장르/제목/작성자/시간/조회수등을 표시해주는 함수 -->
        <div class="review">
            <?php echo get_content($fillarray); ?>   
        </div>
    <?php }
        $numPage = make_paging_number($num,$search_title,"","");
      ?>        
      <div id="paging">
      <?php for($i=0; $i<$numPage; $i++){ ?> 
        <a href="iframe.php?page=<?=($i+1)?>"><?=($i+1)?></a>
      <?php }?></div>
    <?php }

    // genre 만 선택하고 kategorie 는 선택하지 않았을경우의 게시글을 보여주는 코딩
    if(isset($_GET['genre']) && !isset($_GET['kategorie'])){
      if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
      }else{
          //페이지 값이 없으면 1로 초기화
        $page = 1;
      }
      // 페이지에 출력할 레코드 수
      $numView = 10;
      //LIMIT 인덱스 순서를 정해줄때 사용
      $firstLimitValue = ($numView * $page) - $numView;
      $search_title="";
      if(isset($_POST['search_title'])){       
        $sql = mq("SELECT * FROM review WHERE title LIKE '%{$_POST['search_title']}%' and genre = '{$_GET['genre']}' ORDER BY review_no DESC");                
        $search_title = $_POST['search_title'];
        $num = 3;
      } else {
        // 변수 page값에 따른 LIMIT의 첫번째 값 계산
        $sql = mq("SELECT * FROM review WHERE genre = '{$_GET['genre']}' ORDER BY review_no DESC LIMIT {$firstLimitValue}, {$numView}");        
        $num = 4;
      } 
      $low = $sql -> num_rows;
      for($i=1; $i<=$low; $i++){
        $result =$sql -> fetch_array();      
        //result5에 fetch_array된 필드와 데이타들을 fillarray에 각 필드명별로 인덱스를 만들어서 데이터를 저장시키는 함수
        $fillarray = get_array_review($result); ?>
        <!--게시판에 장르/제목/작성자/시간/조회수등을 표시해주는 함수 -->
        <div class="review">
            <?php echo get_content($fillarray); ?>   
        </div>
    <?php }
        $numPage = make_paging_number($num,$search_title,$_GET['genre'],"");
      ?>        
      <div id="paging">
      <?php for($i=0; $i<$numPage; $i++){ ?> 
        <a href="iframe.php?page=<?=($i+1)?>"><?=($i+1)?></a>
      <?php }?></div>
      <?php }

      // kategorie만 선택하고 genre는 선택하지 않았을경우의 게시글
      if(!isset($_GET['genre']) && isset($_GET['kategorie'])){
        if(isset($_GET['page'])){
          $page = (int) $_GET['page'];
        }else{
            //페이지 값이 없으면 1로 초기화
          $page = 1;
        }
        // 페이지에 출력할 레코드 수
        $numView = 10;
        //LIMIT 인덱스 순서를 정해줄때 사용
        $firstLimitValue = ($numView * $page) - $numView;
        $search_title="";
        if(isset($_POST['search_title'])){       
          $sql = mq("SELECT * FROM review WHERE title LIKE '%{$_POST['search_title']}%' and kategorie = '{$_GET['kategorie']}' ORDER BY review_no DESC");                
          $search_title = $_POST['search_title'];
          $num = 5;
        } else {
          // 변수 page값에 따른 LIMIT의 첫번째 값 계산
          $sql = mq("SELECT * FROM review WHERE kategorie = '{$_GET['kategorie']}' ORDER BY review_no DESC LIMIT {$firstLimitValue}, {$numView}");        
          $num = 6;
        } 
        $low = $sql -> num_rows;
        for($i=1; $i<=$low; $i++){
          $result =$sql -> fetch_array();      
          //result5에 fetch_array된 필드와 데이타들을 fillarray에 각 필드명별로 인덱스를 만들어서 데이터를 저장시키는 함수
          $fillarray = get_array_review($result); ?>
          <!--게시판에 장르/제목/작성자/시간/조회수등을 표시해주는 함수 -->
          <div class="review">
              <?php echo get_content($fillarray); ?>   
          </div>
      <?php }
          $numPage = make_paging_number($num,$search_title,"",$_GET['kategorie']);
        ?>        
        <div id="paging">
        <?php for($i=0; $i<$numPage; $i++){ ?> 
          <a href="iframe.php?page=<?=($i+1)?>"><?=($i+1)?></a>
        <?php }?></div>
      <?php }

      // genre와 kategorie 모두를 선택해서 두가지 조건에 맞는 게시글을 보여주는 경우
      if(isset($_GET['genre']) && isset($_GET['kategorie'])){
        if(isset($_GET['page'])){
          $page = (int) $_GET['page'];
        }else{
            //페이지 값이 없으면 1로 초기화
          $page = 1;
        }
        // 페이지에 출력할 레코드 수
        $numView = 10;
        //LIMIT 인덱스 순서를 정해줄때 사용
        $firstLimitValue = ($numView * $page) - $numView;
        $search_title="";
        if(isset($_POST['search_title'])){       
          $sql = mq("SELECT * FROM review WHERE title LIKE '%{$_POST['search_title']}%' and genre = '{$_GET['genre']}'
                    and kategorie = '{$_GET['kategorie']}' ORDER BY review_no DESC");                
          $search_title = $_POST['search_title'];
          $num = 7;
        } else {
          // 변수 page값에 따른 LIMIT의 첫번째 값 계산
          $sql = mq("SELECT * FROM review WHERE kategorie = '{$_GET['kategorie']}' 
                    and genre = '{$_GET['genre']}' ORDER BY review_no DESC LIMIT {$firstLimitValue}, {$numView}");        
          $num = 8;
        } 
        $low = $sql -> num_rows;
        for($i=1; $i<=$low; $i++){
          $result =$sql -> fetch_array();      
          //result5에 fetch_array된 필드와 데이타들을 fillarray에 각 필드명별로 인덱스를 만들어서 데이터를 저장시키는 함수
          $fillarray = get_array_review($result); ?>
          <!--게시판에 장르/제목/작성자/시간/조회수등을 표시해주는 함수 -->
          <div class="review">
              <?php echo get_content($fillarray); ?>   
          </div>
      <?php }
          $numPage = make_paging_number($num,$search_title,$_GET['genre'],$_GET['kategorie']);
        ?>        
        <div id="paging">
        <?php for($i=0; $i<$numPage; $i++){ ?> 
          <a href="iframe.php?page=<?=($i+1)?>"><?=($i+1)?></a>
        <?php }?></div>
        <?php


          } ?>
    </div>
  </body>
</html>