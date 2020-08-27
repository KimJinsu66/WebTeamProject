<?php
  include "../../../common/db.php";
  
  $country = $_POST['select_country'];
  $title = $_POST['title'];
  $genre_title =$_POST['genre_title'];
  $description = $_POST['description'];
  $genre = $_POST['select_genre'];
  $kategorie = $_POST['select_kategorie'];
  $tmpfile = $_FILES['file']['tmp_name']; //$_FILES는 'file'에 대한 것에 대해서 많은 array값의 형태로 가져오는데 그중에서 tep_name의 값을 가져와라
  $o_name = $_FILES['file']['name'];      //$_FILES는 'file'에 대한 것에 대해서 많은 array값의 형태로 가져오는데 그중에서 name의 값을 가져와라
  $filename = iconv("UTF-8", "EUC-KR", $_FILES['file']['name']); // 파일이 깨지지 않도록 인코딩해주는 것
  $folder ="../media/".$filename;        //같은 이미지를 폴더에 새롭게 복사하는 것
  move_uploaded_file($tmpfile,$folder); //move_uploaded_file()은 서버로 전송된 파일을 저장할 때 사용하는 함수입니다.
  $total_title = "<".$genre_title.">".$title;

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
  if($o_name != null){
    $sql2 = mq("insert into review(id, title, description, file, memberNum, genre, kategorie, review_date, genre_title, country)
              values('".$_SESSION['id']."', '".$total_title."', '".$description."', '".$o_name."', '".$member_no['mem_no']."', '".$genre."',
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
