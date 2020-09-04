<?php
  include "../common/db.php";
  include "review_lib/get_array_review.php";
  include "review_lib/get_commentWrite.php";
  include "review_lib/get_review_content.php";
  include "review_lib/get_genre.php";
  include "review_lib/make_paging.php";

  $url ="./review_check/review_delete.php?review_no=".$_GET['review_no'];
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>일본페이지</title>
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="titleImg" href="../home/imgs/favicon.png">
  <link rel="stylesheet" href="review_css/mainTextAndreviewLayout.css">

  <link rel="stylesheet" href="review_css/curture_main.css">

  <!-- 폰트 어썸 백터 아이콘 가져오기 -->
  <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous">
  </script>
 
  <!-- 구글 폰트 가져오기 -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- revew_read_page css -->
  <link rel="stylesheet" href="review_css/review_read.css">
  <!--고정 headere-->
  <?php include "../header/header.php"; ?>
  
  <script type="text/javascript">
    function confirmation() {
    //사용방법은 아래와 같다. answer의 변수를 받아 true/false값에 따라서 맞는 기능을 코딩하면 된다.
      let url = "<?= $url ?>";
      let answer = confirm("정말로 삭제 하시겠습니까??")
      
      answer ? window.location = url : location.reload();         
    }
  </script>
</head>
<body>
  <div class="button_container">
  <?php
    // 현재 최상위 review_no 를 가져온다 
    // 만약 현재 읽고있는 게시글이 가장 최신글이라면 다음글이 없으니까 현재글 = 최신글 이냐 아니냐 조건을 주기위해서 
    // 그리고 가장 오래된 글 (제일 처음 작성된 글)에서는 이전글이 존재하지 않으니까 그 조건을 줘야한다.
    $sql = mq("select review_no from review order by review_no desc");
    $result = $sql -> fetch_array();
    //현재글이 최신글이 아니고 가장 처음글이 아닐경우  ->  다음글 o / 이전글 o
    if($result['review_no'] > $_GET['review_no'] && $_GET['review_no'] > 1){
  ?>
    <div class="">
      <a href="./review_read.php?review_no=<?=$_GET['review_no']+1?>">▲ 다음글</a>
    </div>
    <div class="">
        <a href="./review_read.php?review_no=<?=$_GET['review_no']-1?>">▼ 이전글</a>
      </div>
    <?php } 

    // 햔재보는 글이 최신글이라면 -> 다음글 x 이전글 o 
    if($result['review_no'] <= $_GET['review_no']){ ?>
      <div class="">
        <a href="./review_read.php?review_no=<?=$_GET['review_no']-1?>">▼  이전글</a>
      </div>
    <?php } 

    // 햔재보는 글이 최초(처음)글 이라면 -> 다음글 o 이전글 x
    if($_GET['review_no'] == 1){ ?>
      <div class="">
        <a href="./review_read.php?review_no=<?=$_GET['review_no']+1?>">▲ 다음글</a>
      </div>
    <?php } ?>
    <div class="">
      <a href="./review_page.php?page=1">목록</a>
    </div>
    <div class="#">
      <a href="./review_check/bookmark_ok.php?review_no=<?=$_GET['review_no']?>">즐겨찾기</a>
    </div>
  </div>
  <?php
  $sql = mq("select * from review where review_no = ".$_GET['review_no']."");
  $result = $sql -> fetch_array();
  $fillarray = get_array_review($result);

  // 게시글 들어올때마다 조회수가 오르도록 해놨음 .
  $count = $fillarray['view_count'];
  $count ++;
  $sql = mq("update review set view_count =".$count." where review_no = ".$_GET['review_no']."");

  ?>
  
  <div class="main">
    <!-- 게시글을 불러오는 함수  -->
    <div class="kategorie">
      <?php echo get_review_content($fillarray); ?>
    </div>

    <div class="modify_delete_container">
    <div class="review_modify">
    <?php
      if(isset($_SESSION['id'])){
        if($_SESSION['id'] == $fillarray['id']){?>
          <form action="./review_modify.php?review_no=<?=$_GET['review_no']?>" method="post">
          <input type="submit" value="수정">
          <input type="hidden" name="modify" value="<?=$fillarray['review_no']?>">
          </form>
          <?php }
          }?>
    </div>

    <!-- 글쓴 사람에게만 글삭제 권한을 줄 수 있게 해주는 코드  -->
    <div class="review_delete">
    <?php
      if(isset($_SESSION['id'])){
        if($_SESSION['id'] == $fillarray['id']){?>
          <form action="" method="post">
          <input type="button" onclick="confirmation()" value="삭제">
          <input type="hidden" name="delete" value="<?=$fillarray['review_no']?>">
          </form>
          <?php }
          }?>
    </div>
    </div>
    <!-- 현재 게시글에 달려있는 댓글을 보여주는 창과 댓글 입력하는 창 -->
    <div class="comment">
      <?php
       // 리뷰db와 댓글db를 join해서 만약 댓글이 존재한다면 댓글이 보이게 해주는 코딩
      $sql2 = mq("select * from comment, review where comment.reviewNum=review.review_no 
                  and comment.reviewNum ='".$fillarray['review_no']."'");
      $low = $sql2 ->num_rows;
      if(!$low == 0){
        for($j=1; $j<=$low; $j++){
          $result2 =$sql2 -> fetch_array();
          ?>
          <div class="comment_container">
            <div class="author">
              <?=$result2['comment_id']?>
            </div>
            <div class="comment_description">
              <?=$result2['comment']?>
            </div>
            <div class="comment_date">
              <?=$result2['comment_date']?>
            </div>
            <div class="comment_delete">
            <?php
              if(isset($_SESSION['id'])){
                if($_SESSION['id'] == $result2['comment_id']){?>
                  <form action="./review_check/comment_delete.php" method="post">
                  <input type="submit" value="삭제">
                  <input type="hidden" name="delete" value="<?=$result2['reviewNum']?>">
                  <input type="hidden" name="comment_no" value="<?=$result2['comment_no']?>">
                  </form>
                  <?php }
                  }?>                  
            </div>
          </div>
      <?php
        }
      }
      // 댓글창을 함수화 해놓은 것을 가져다가 씀
      echo get_commentWrite($fillarray['mem_no'],$fillarray['review_no']);
      ?>
    </div>
  </div>
</body>
</html>