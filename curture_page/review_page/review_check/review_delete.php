<?php
  include "../../common/db.php";

  $review_no = $_GET['review_no'];
  echo $review_no;
  if($review_no == null){
    echo "<script>alert('존재하지 않는 글입니다'); location.href='../review_read.php';</script>";
  }
    // review 지우기 위한 쿼리문
    $sql = mq("delete from review where review_no = '".$review_no."'");  
     // review과 연동된 comment 지우기 위한 쿼리문
    $sql2 = mq("delete from comment where reviewNum = '".$review_no."'"); 
    // AUTO_INCREMENT 를 초기화해서 review_no를 다시 재배열 시켜준다
    // 글을 삭제하면 review_no가 흐트러지기 때문에 다시 정렬해줘야만 깔끔한 게시글 번호가 된다.
    $sql3 = mq("SET @COUNT = 0");
    $sql3 = mq("UPDATE review SET review_no = @COUNT:=@COUNT+1");

    if($sql && $sql2){
      echo "<script>alert('삭제 되었습니다.'); location.href='../review_page.php?page=1';</script>";
      
    } else {
      echo "<script>alert('삭제 실패'); history.back();</script>";
    }


 ?>
