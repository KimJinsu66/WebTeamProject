<?php
  include "../common/db.php";
  // include "./review/lib/get_array_user.php";
  require_once('../review_page/review_lib/get_class.php');
  
  $get = new get;
  if(!isset($_SESSION['id'])){
    echo "<script>alert('로그인해야지만 이용할 수 있는 서비스입니다.'); location.href='../login_page/login.php';</script>";
  }
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>마이페이지</title>
  
  <!-- mypage의 css -->
  <link rel="stylesheet" href="./mypage_css/mypage_css.css">
  <!--고정 headere-->
  <?php include "../header/header.php"; ?>
  <style>
  .margin{
    margin: 25px;
  }
  </style>
</head>
<body>
<div class="container mypage"> 
  <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" 
  onclick="location.href='./mypage.php' ">
    마이페이지
  </button>
  <button type="button" class="list-group-item list-group-item-action" 
  onclick="location.href='./mypage.php?page=1' ">保存したレビュー</button>
  <button type="button" class="list-group-item list-group-item-action" 
  onclick="location.href='./mypage.php?page=2' ">自分が書いたレビュー</button>
  <button type="button" class="list-group-item list-group-item-action" 
  onclick="location.href='./mypage.php?page=3' ">メンバー脱退</button>
  <button type="button" class="list-group-item list-group-item-action" 
  onclick="location.href='./mypage.php?page=4' ">회원정보 수정</button>
  <button type="button" class="list-group-item list-group-item-action" 
  onclick="location.href='./mypage.php?page=5' ">myitem</button>
</div>
<div>
  <?php
   //각 항목마다 url에 page 번호를 매겨서 현재 페이지에서 url에 따라서 내용물만 변하게 하기위해서 조건을 각각 주었습니다.
  //mypage의 초기 화면일 경우
  if(!isset($_GET['page'])){
    require_once('view/view_user_info.php');
  }
  //회원탈퇴
  else if($_GET['page']==3){
    require_once('view/view_user_drop.php');
  }
  //즐겨찾기 목록
  else if($_GET['page']==1){
    require_once('view/view_user_bookmark.php');
  }
  //자기가 쓴 글 목록
  else if($_GET['page']==2){
    require_once('view/view_user_review.php');
  }
  //회원정보 변경
  else if($_GET['page']==4){ 
    require_once('view/view_user_info_change.php');
  }
  else if($_GET['page']==5){ 
    require_once('view/view_user_buied_item.php');
  }
  ?>
</div>
 
</div>
<?php include "../footer/footer.php"?>
</body>
</html>