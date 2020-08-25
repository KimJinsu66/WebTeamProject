<?php
  include "../../../common/db.php";

  $title = htmlspecialchars ($_POST['title'], ENT_QUOTES);
  $description = htmlspecialchars ($_POST['description'], ENT_QUOTES);
  $review_no = htmlspecialchars ($_POST['review_no'], ENT_QUOTES);

  if($title == null || $description == null){
    echo "<script>alert('내용을 모두 입력해주세요.'); location.href='../../japan_review_modify.php?review_no='".$review_no."'';</script>";
    exit;
  } else {
    $sql = mq("update review set title ='".$title."' where review_no = '".$review_no."'");
    $sql2 = mq("update review set description ='".$description."' where review_no = '".$review_no."'");
  }

    if($sql && $sql2){
      echo "<script>alert('수정 성공했습니다.'); location.href='../../japan_review_read.php?review_no='".$review_no."'';</script>";
    } else {
      echo "<script>alert('수정에 실패했습니다.'); location.href='../../japan_review_modify.php?review_no='".$review_no."'';</script>";
    }
  

 

?>