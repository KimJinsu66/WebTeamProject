<?php
  include "../../../common/db.php";
  
  $comment_no = $_POST['comment_no'];
  $review_no = $_POST['delete'];
  if($review_no == null){
    echo "<script>alert('존재하지 않는 글입니다'); history.back();</script>";
    exit;
  }
    // review과 연동된 comment 지우기 위한 쿼리문
    $sql = mq("delete from comment where comment_no = '".$comment_no."'");  
    if(isset($sql)){
      echo "<script>alert('삭제 되었습니다.'); history.back();</script>";
      exit;      
    } else {
      echo "<script>alert('삭제 실패'); history.back();</script>";
      exit;
    }


 ?>
