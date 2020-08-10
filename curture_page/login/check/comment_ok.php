<?php
  include "../data/db.php";
  $id = $_SESSION['id'];
  $review_no = $_POST['review_no'];
  $mem_no = $_POST['mem_no'];
  $comment = $_POST['comment'];

  if($review_no == null ||$mem_no==null || $comment==null || $id ==null){
    echo "<script>alert('내용을 입력하세요~!'); location.href='../review_read.php';</script>";
  } else {
    $sql = mq("insert into comment(comment, reviewNum,id)
            values('".$comment."', '".$review_no."','".$id."')");
  header('Location: http://localhost/WebTeamProject-master/curture_page/country/curture_main.php');
}

 ?>
