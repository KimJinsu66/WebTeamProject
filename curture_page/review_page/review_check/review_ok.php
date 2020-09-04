<?php
  include "../../../common/db.php";
  include "./lib/fileCheckAndUplode.php";
  
  $country = $_POST['select_country'];
  $title = $_POST['title'];
  $genre_title =$_POST['genre_title'];
  $description = $_POST['description'];
  $genre = $_POST['select_genre'];
  $kategorie = $_POST['select_kategorie'];
  $total_title = "<".$genre_title.">".$title;

  //사진이 업로드 되었을 때만 작동하도록 
  if($_FILES['file']['type'] != ""){
    //파일이 사진파일인지 확인하고 조건에 충족한다면 지정된 경로에 파일을 저장시킴 
    // 또 저장된 파일이름을 return 시켜서 그 값을 $filename 변수에 저장 (쿼리문에서 insert 할때 파일 이름을 넣어주기 위함)
    $filename =  fileCheckAndUplode();
  } 

  if(isset($_SESSION['id'])){
  $sql = mq("select * from members where id = '".$_SESSION['id']."'"); // 현제 접속중인 유저의 mem_no를 가져와서 review 테이블이 넣어주기 위해서 만든 쿼리문
  $member_no = $sql -> fetch_array();
  } else{
    echo "<script>alert('로그인을 하셔야 게시물 작성이 가능합니다.'); location.href='../../../login/login.php';</script>";
    exit;
  }
  
  if($title == null || $description ==null || $genre == null || $kategorie ==null || $genre_title == null || $country == null){
      echo "<script>alert('내용을 모두 기입해주세요.'); history.back();</script>";
      exit;
  }    
  
  // $sql = mq("select * from media where title = '".$genre_title."'");
  // $low = $sql -> num_rows;
  // if($low == 0){
  //   echo "<script>alert('정확한 제목을 입력 및 선택해주세요.'); history.back();</script>";
  //   exit;
  // }
    
  //사용자의 현재 point의 db값을 가져오기 위함 
  $sql = mq("select * from members where id ='".$_SESSION['id']."' ");
  $result = $sql -> fetch_array();

  //사진을 넣었을 경우와 안넣었을 경우 따로 따로 되도록 해놨음
  if($filename != null){
    $sql2 = mq("insert into review(id, title, description, file, memberNum, genre, kategorie, review_date, genre_title, country)
              values('".$_SESSION['id']."', '".$total_title."', '".$description."', '".$filename."', '".$member_no['mem_no']."', '".$genre."',
              '".$kategorie."',now(),'".$genre_title."', '".$country."')");  
    $check = true;
  } else {
      $sql2 = mq("insert into review(id, title, description, memberNum, genre, kategorie, review_date, genre_title, country)
              values('".$_SESSION['id']."', '".$total_title."', '".$description."', '".$member_no['mem_no']."', '".$genre."',
              '".$kategorie."',now(),'".$genre_title."', '".$country."')");
      $check = true;
  }
  
  //사용자가 글을 쓰면 point를 3씩 주기 위한 코딩 
  // 글쓰기에 성공했다는 알림을 보여준 뒤에 확인을 누르면 다시 게시글 목록으로 보내주기 위함 
  if($check){  
    $sql3 = mq("update members set point ='".$result['point']."'+3 where id ='".$_SESSION['id']."' ");
      echo "<script>alert('글쓰기 성공했습니다.'); location.href=
      'http://localhost/WebTeamProject/curture_page/page/Japan_review_page.php?page=1';</script>";
  } else {
      echo "<script>alert('글쓰기 실패했습니다..'); history.back();</script>";
  }
 ?>
