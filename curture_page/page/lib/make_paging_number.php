<?php
//페이징 해주기 위해서 우선 총 게시글 수를 가져와서 몇 페이지까지 만들어 줘야하는 지를 판단하기 위한 함수
function make_paging_number($i, $search_title, $genre, $kategorie){
  switch($i){
    // 카테고리 x 장르 x 검색 o 일 경우
    case 1:      
      $sql = mq("SELECT * FROM review WHERE title LIKE '%{$search_title}%'");

      break;
    // 카테고리 x 장르 x 검색 x 일 경우
    case 2:      
      $sql = mq("SELECT * FROM review");

      break;
    // 카테고리 x 장르 o 검색 o 일 경우
    case 3:      
      $sql = mq("SELECT * FROM review WHERE genre = '{$genre}' and title LIKE '%{$search_title}%'");

      break;
    // 카테고리 x 장르 o 검색 x 일 경우
    case 4:
      $sql = mq("SELECT * FROM review WHERE genre = '{$genre}'");

      break;
    // 카테고리 o 장르 x 검색 o 일 경우
    case 5:      
      $sql = mq("SELECT * FROM review WHERE kategore = '{$kategore}' and title LIKE '%{$search_title}%'");

      break;
    // 카테고리 o 장르 x 검색 x 일 경우
    case 6:      
      $sql = mq("SELECT * FROM review WHERE kategorie = '{$kategorie}'");

     break;
    // 카테고리 o 장르 o 검색 o 일 경우  
    case 7:      
      $sql = mq("SELECT * FROM review WHERE kategore = '{$kategore}' and genre = '{$genre}' 
                and title LIKE '%{$search_title}%'");
      break;
    // 카테고리 o 장르 o 검색 x 일 경우
    case 8:      
      $sql = mq("SELECT * FROM review WHERE kategore = '{$kategore}' and genre = '{$genre}'");
    
      break;
  }
  //한페이지에 나올 view 수 
  $numView = 10;
  //review table의 총 레코드 수
  $totalRecord = $sql->num_rows;
  //페이지 수
  $numPage = ceil($totalRecord / $numView);

  return $numPage;
}
?>

