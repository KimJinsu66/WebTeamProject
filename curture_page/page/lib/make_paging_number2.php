<?php
//페이징 해주기 위해서 우선 총 게시글 수를 가져와서 몇 페이지까지 만들어 줘야하는 지를 판단하기 위한 함수
function make_paging_number($i, $search_title, $genre, $kategorie){
  switch($i){
    // 카테고리 x 장르 x 검색 o 일 경우
    case 1:      
      $sql_total = mq("select * from review where title like '%".$search_title."%'");
      break;
    // 카테고리 x 장르 x 검색 x 일 경우
    case 2:      
      $sql_total = mq("select * from review");
      break;
    // 카테고리 x 장르 o 검색 o 일 경우
    case 3:      
      $sql_total = mq("select * from review where genre = '".$genre."' and title like '%".$search_title."%'");
      break;
    // 카테고리 x 장르 o 검색 x 일 경우
    case 4:
      $sql_total = mq("select * from review where genre = '".$genre."'");
      break;
    // 카테고리 o 장르 x 검색 o 일 경우
    case 5:
      $sql_total = mq("select * from review where kategorie = '".$kategorie."' and title like '%".$search_title."%'");
      break;
    // 카테고리 o 장르 x 검색 x 일 경우
    case 6: 
      $sql_total = mq("select * from review  where kategorie = '".$kategorie."'");
      
    break;
    // 카테고리 o 장르 o 검색 o 일 경우 
    case 7:      
      $sql_total = mq("select * from review where genre = '".$genre."' and
                       kategorie = '".$kategorie."' and title like '%".$search_title."%'");
      break;
      // 카테고리 o 장르 o 검색 x 일 경우
    case 8:      
      $sql_total = mq("select * from review where genre = '".$genre."' and kategorie = '".$kategorie."'");
      break;
  }
  $row_total = $sql_total -> num_rows;
  $page_total = $row_total/10;
  $page_if = $row_total%10;
  if($row_total >= 10 && $page_if == 0){
    $page_total -= 1;
  }
  return $page_total;
}
?>