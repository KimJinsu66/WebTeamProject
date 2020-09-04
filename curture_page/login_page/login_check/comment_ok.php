<?php
  include "../data/db.php";
  $id = $_SESSION['id'];
  $review_no = $_POST['review_no'];
  $mem_no = $_POST['mem_no'];
  $comment = $_POST['comment'];

  //로그인 상태만 댓글달도록 -> 비로그인이면 로그인화면으로 보낸다.
  if($id == null){
    echo "<script>alert('댓글기능을 이용하기 위해서는 로그인이 필요합니다.'); location.href='../login.php';</script>";
  }
  //댓글에 내용을 적어야지만 댓글이 작성
  if($review_no == null ||$mem_no==null || $comment==null){
    echo "<script>alert('내용을 입력하세요~!'); location.href='../review_read.php';</script>";
  }

  //1.장르와 카테고리가 아무것도 없을경우  2.장르만 있을경우 3.카테고리만 있을경우 4. 둘다 있을경우에 따라서
  //다시 글쓴 화면으로 새로고침 시켜주기위해서 조건을 4개로 나눴다.
  if(isset($_POST['genre']) && !isset($_POST['kategorie'])){
    $genre = $_POST['genre'];
    $sql = mq("insert into comment(comment, reviewNum, id, comment_date)
            values('".$comment."', '".$review_no."','".$id."', now())");
    header("Location: http://localhost/WebTeamProject/curture_page/country/curture_main.php?genre=$genre");
  } else if(!isset($_POST['genre']) && isset($_POST['genre'])){
    $kategorie = $_POST['kategorie'];
    $sql = mq("insert into comment(comment, reviewNum, id, comment_date)
              values('".$comment."', '".$review_no."','".$id."', now())");
    header("Location: http://localhost/WebTeamProject/curture_page/country/curture_main.php?kategorie=$kategorie");
  } else if(isset($_POST['genre']) && isset($_POST['genre'])){
    $genre = $_POST['genre'];
    $kategorie = $_POST['kategorie'];
    $sql = mq("insert into comment(comment, reviewNum, id, comment_date)
              values('".$comment."', '".$review_no."','".$id."', now())");
    header("Location: http://localhost/WebTeamProject/curture_page/country/curture_main.php?genre=$genre&kategorie=$kategorie");
  } else {
    $sql = mq("insert into comment(comment, reviewNum, id, comment_date)
              values('".$comment."', '".$review_no."','".$id."', now())");
    header("Location: http://localhost/WebTeamProject/curture_page/country/curture_main.php");
  }

 ?>
