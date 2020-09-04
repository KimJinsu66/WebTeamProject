<?php
  include "../common/db.php";
  // include "./review/lib/get_array_user.php";
  include "../review_page/review_lib/get_class.php";
  
  $get = new get;
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

  <!-- 폰트 어썸 백터 아이콘 가져오기 -->
  <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous">
  </script>
 
  <!-- 구글 폰트 가져오기 -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
 
  <!-- mypage의 css -->
  <link rel="stylesheet" href="./mypage_css/mypage_css.css">
  <!--고정 headere-->
  <?php include "../header/header.php"; ?>
</head>
<body>
<div class="container"> 
  <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" 
  onclick="location.href='./mypage.php' ">
    마이페이지
  </button>
  <button type="button" class="list-group-item list-group-item-action" 
  onclick="location.href='./mypage.php?page=1' ">즐겨찾기 글목록</button>
  <button type="button" class="list-group-item list-group-item-action" 
  onclick="location.href='./mypage.php?page=2' ">내가 쓴 글목록</button>
  <button type="button" class="list-group-item list-group-item-action" 
  onclick="location.href='./mypage.php?page=3' ">회원탈퇴</button>
  <button type="button" class="list-group-item list-group-item-action" 
  onclick="location.href='./mypage.php?page=4' ">준비중</button>
</div>
  
<?php
//각 항목마다 url에 page 번호를 매겨서 현재 페이지에서 url에 따라서 내용물만 변하게 하기위해서 조건을 각각 주었습니다.
//mypage의 초기 화면일 경우
if(!isset($_GET['page'])){
  //회원의 개인정보들을 보여주기위해서 db에서 호출
  $sql = mq("select * from members where id = '".$_SESSION['id']."'");
  $result = $sql -> fetch_array();
  $fillarray = $get -> get_array_user($result);
  //항목마다 테이블을 만들면 코딩이 너무 길어져서  반복문을 사용하기 위해서 배열에 넣었다.
  $user_field = ['사용자 이름','생일','성별','계정 이메일'];
  $user_content = ['name','birthday','gender','email']; ?>

<div class ="user_info">
  <div class="user_id">
    <strong><?=$_SESSION['id']?></strong> 님의 정보입니다.<br>
    <span>회원정보는 개인정보처리방침에 따라 안전하게 보호되며, 
      회원님의 명백한 동의 없이 공개 또는 제 3자에게 제공되지 않습니다.</span>
  </div>
  <div class="user_table">
    <table class="table table-striped">
      <tr height="150px">
        <th width="200px">
          <div class="table_title">등급</div>
        </th>
        <td>
          <div class="table_content">
            <div><?=$fillarray['rank']?></div>
            <div><small>홈페이지에서 많이 활동하면 등급을 올려서 더 많은 혜택을 받을 수 있어요~!.</small></div>
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
            <div><?=$fillarray[$user_content[$i]]?></div>
            <div><small>이름이나 생년월일, 성별 등의 정보가 변경되었다면 
              본인확인을 통해 정보를 수정할 수 있습니다.</small></div>
            <div>수정</div>
          </div>
        </td>
      </tr>
      <?php }?>
    </table>
  </div>
</div>

<?php } 
  // 회원탈퇴를 눌렀을 경우의 페이지  
  else if($_GET['page']==3){ ?>
  <div class="user_drop">
    <form action="../login_page/login_check/user_drop.php" method="post">
      <div class="drop_title">
        회원탈퇴
      </div>
      <div class="user_input">        
        <input type="password" name="password" placeholder="비밀번호를 입력해주세요.">
        <input type="submit" value="확인">      
      </div>
    </form>
  </div>

<?php }
  //자신이 즐겨찾기를 누른 게시글들을 볼 수 있는 페이지 
  else if($_GET['page']==1){?>
  <div class="">
    <?php
    // 현재 사용자의 즐겨찾기 목록을 가져오기 위해서 bookmark table과 members table을 조인해서 db를 가져온다
    $sql = mq("select * from members_bookmark as book, members as mem 
              where book.membersNum = mem.mem_no and id = '".$_SESSION['id']."'");
    $result = $sql -> fetch_array();
    if(($sql -> num_rows) == 0 || $result['reviewNum'] == ""){
      echo "<br><br>즐겨찾기 목록이없습니다!! 원하시는 글을 즐겨찾기 해보세요~";
    } else {
      
    //즐겨찾기 목록을 string 형태로 다 가져옮
    $array = $result['reviewNum'];
    // explode(); 는 string 형태의 data를  ','라는 특수문자를 기준으로 나눠서 배열로 만들어준다
    $bookmark_array = explode(',', $array);
    ?>
    <div class="bookmark_list">
      <table class="table table-striped">
    <?php
    //count($bookmark_array) 를 통해서 배열의 갯수만큼 반복시켜서 모든 즐겨찾기를 가져올 수 있도록
    for($i=0; $i<count($bookmark_array); $i++){  
      $sql2 = mq("select * from review where review_no ='".$bookmark_array[$i]."'");
      $result2 = $sql2 -> fetch_array(); ?>
        <tr>
          <td>
            <!-- 즐겨찾기 번호에 해당하는 title을 보여주고, 링크로 해당하는 
            url review_no로 보내주면 해당 게시글로 바로 이동한다 -->
            <a href="../review_page/review_read.php?review_no=<?=$bookmark_array[$i]?>"><?=$result2['title']?></a>      
          </td> 
        </tr>
    <?php }?>
      </table>  
    </div>
  </div>
<?php }
  }
  //자신이 게시한 글을 볼 수 있는 페이지
  else if($_GET['page']==2){?>
   <div class="">
    <?php
    // 사용자의 id로 작성되어있는 모든 글을 가져온다 .
    $sql = mq("select * from review where id ='".$_SESSION['id']."'");
    $low = $sql -> num_rows;
    if($low == 0){
      echo "<br><br>{$_SESSION['id']}님이 작성한 글 목록이없습니다!! 새로운 글을 작성해보세요~";
    } else {
    ?>
    <div class="myReview_list">
      <table class="table table-striped">
    <?php
    for($i=0; $i<$low; $i++){  
      $result = $sql -> fetch_array(); ?>      
        <tr>
          <td>
            <!-- for문을 통해 순차대로 db를 가져온는데 해당하는 
            title 을 누르면 링크로 해당하는 url review_no 로 보내줘서 바로 게시글로 이동-->
            <a href="../review_page/review_read.php?review_no=<?=$result['review_no']?>"><?=$result['title']?></a>      
          </td> 
        </tr>
    <?php }?>
      </table>  
    </div>
  </div>
<?php }
    }?>
</div>
</body>
</html>