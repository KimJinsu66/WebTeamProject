<?php
  include "../../../common/db.php";

  $title = $_POST['title'];
  $description = $_POST['description'];
  $review_no = $_POST['review_no'];

  echo $review_no;

  if($title == null || $description == null){
    echo "<script>alert('제목과 내용을 입력해주세요.'); history.back();</script>";
    exit;
  }

  $sql = mq("update review set title ='".$title."' where review_no = '".$review_no."'");
  $sql2 = mq("update review set description ='".$description."' where review_no = '".$review_no."'");
  
  if($sql && $sql2){
    echo "<script>alert('수정 성공했습니다.'); history.back();</script>";
  } else {
    echo "<script>alert('수정 실패했습니다.'); history.back();</script>";
  }

?>