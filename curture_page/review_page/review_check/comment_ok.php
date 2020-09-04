<?php
  include "../../common/db.php";

  $id = htmlspecialchars ($_SESSION['id'], ENT_QUOTES);
  $review_no = htmlspecialchars ($_POST['review_no'], ENT_QUOTES);
  $mem_no = htmlspecialchars ($_POST['mem_no'], ENT_QUOTES);
  $comment = htmlspecialchars ($_POST['comment'], ENT_QUOTES);

  
 //로그인 상태만 댓글달도록 -> 비로그인이면 로그인화면으로 보낸다.
 if(!isset($_SESSION['id'])){
    echo "<script>alert('댓글기능을 이용하기 위해서는 로그인이 필요합니다.'); location.href='../../../login/login.php';</script>";

   } 

  //댓글에 내용을 적어야지만 댓글이 작성
  if($review_no == "" ||$mem_no=="" || $comment==""){
    echo "<script>alert('내용을 입력하세요~!'); history.back();</script>";
  } else {
  $sql = mq("insert into comment(comment, reviewNum, comment_id, comment_date)
            values('".$comment."', '".$review_no."','".$id."', now())");
  //사용자의 현재 point의 db값을 가져오기 위함            
  $sql2 = mq("select * from members where id ='".$_SESSION['id']."' ");
  $result = $sql2 -> fetch_array();
    if($sql){
      //사용자가 댓글을 달면 point를 1씩 주기 위함
      $sql3 = mq("update members set point ='".$result['point']."'+1 where id ='".$_SESSION['id']."' ");
      header("Location: ../../review_page/review_read.php?review_no=$review_no");
    } else {
      echo "<script>alert('작성 실패했습니다.'); history.back();</script>";
    }
  }

 ?>
