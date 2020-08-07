<?php
  include "../data/db.php";
  $review_no = $_POST['delete'];

  if($review_no == null){
    echo "<script>alert('존재하지 않는 글입니다'); location.href='../review_read.php';</script>";
  }

    $sql = mq("delete from review where review_no = '".$review_no."'");    // review 지우기 위한 쿼리문
    $sql2 = mq("delete from comment where reviewNum = '".$review_no."'");  // review과 연동된 comment 지우기 위한 쿼리문
    if(isset($sql) && isset($sql2)){
      echo "<script>alert('삭제 되었습니다.'); location.href='../review_read.php';</script>";
    } else {
      echo "<script>alert('삭제 실패'); location.href='../review_read.php';</script>";
    }


 ?>
