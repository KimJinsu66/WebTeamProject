<?php
  include "../common/db.php";
  include "./review/lib/get_array_user.php";
  if(!isset($_SESSION['id'])){
    echo "<script>alert('로그인해야지만 이용할 수 있는 서비스입니다.'); location.href='../login/login.php';</script>";
  }
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>마이페이지</title>
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="titleImg" href="../home/imgs/favicon.png">
  <link rel="stylesheet" href="curture/css/mainTextAndreviewLayout.css">

  <link rel="stylesheet" href="curture/css/curture_main.css">

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
  <?php include "../header/header.php"; ?>

  <style>
    .user_id > span{
      text-decoration:underline;
      font-size:0.9em;
    }
    .container{
      /* margin-top:40px; */
      display:flex;
    }
    .total_button{
      margin-right:40px;
    }
    .table_title{
      padding:32px;
    }
    .table_content{
      padding: 32px 0px 32px 30px;      
    }
    .list-group{
      margin-top:40px;
      margin-right:40px;
    }
    .user_info{
      margin-top:40px;
    }
  </style>
</head>

<body>
<div class="container"> 
  <!-- <div class="total_button">
    <div class="user_button">
      <button type="button" class="btn btn-info" onclick="location.href='./mypage.php?page=1' ">회원정보 변경</button>
    </div>    
    <div class="bookmark_button">
      <button type="button" class="btn btn-info" onclick="location.href='mypage.php?page=2' ">회원탈퇴</button>
    </div>
    <div class="bookmark_button">
      <button type="button" class="btn btn-info" onclick="location.href='mypage.php?page=3' ">즐겨찾기 목록보기</button>
    </div>
  </div>  -->
  <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" onclick="location.href='./mypage.php' ">
    마이페이지
  </button>
  <button type="button" class="list-group-item list-group-item-action" onclick="location.href='./mypage.php?page=1' ">회원탈퇴</button>
  <button type="button" class="list-group-item list-group-item-action" onclick="location.href='./mypage.php?page=2' ">즐겨찾기 글목록</button>
  <button type="button" class="list-group-item list-group-item-action" onclick="location.href='./mypage.php?page=3' ">내가 쓴 글목록</button>
  <button type="button" class="list-group-item list-group-item-action" onclick="location.href='./mypage.php?page=4' ">Vestibulum at eros</button>
</div>
  
<?php
if(!isset($_GET['page'])){
  $sql = mq("select * from members where id = '".$_SESSION['id']."'");
  $result = $sql -> fetch_array();
  $fillarray = get_array_user($result);
  $user_field = ['사용자 이름','생일','성별','계정 이메일'];
  $user_content = ['name','birthday','gender','email'];

?>
<div class ="user_info">
  <div class="user_id">
    <strong><?=$_SESSION['id']?></strong> 님의 정보입니다.<br>
    <span>회원정보는 개인정보처리방침에 따라 안전하게 보호되며, 회원님의 명백한 동의 없이 공개 또는 제 3자에게 제공되지 않습니다.</span>
  </div>
  <div class="user_table">
    <table class="table table-striped">
      <tr height="150px">
        <th width="200px">
          <div class="table_title">
            등급
          </div>
        </th>
        <td>
          <div class="table_content">
            <div>
              <?=$fillarray['rank']?>
            </div>
            <div>
              <small>홈페이지에서 많이 활동하면 등급을 올려서 더 많은 혜택을 받을 수 있어요~!.</small>
            </div>
          </div>
        </td>
      </tr>
  <?php 
    for($i=0; $i<count($user_field); $i++){ ?>
      <tr height="150px">
        <th width="200px">
          <div class="table_title">
            <?=$user_field[$i]?>
          </div>          
        </th>
        <td>
          <div class="table_content">
            <div>
              <?=$fillarray[$user_content[$i]]?>
            </div>
            <div>
              <small>이름이나 생년월일, 성별 등의 정보가 변경되었다면 본인확인을 통해 정보를 수정할 수 있습니다.</small>
            </div>
            <div>
              수정
            </div>
          </div>
        </td>
      </tr>
      <?php }?>

    </table>
  </div>
</div>

<?php } 
  else if($_GET['page']==1){ ?>
  <div class="">
    <form action="../login/check/user_drop.php" method="post">
      <div >
        회원탈퇴
      </div>
      <div>
        비밀번호를 입력해주세요.
        <input type="password" name="password">
        <input type="submit" value="확인">      
      </div>
    </form>
  </div>

<?php }?>

</div>
</body>
</html>