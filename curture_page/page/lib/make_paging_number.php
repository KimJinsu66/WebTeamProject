<?php
//페이징 해주기 위해서 우선 총 게시글 수를 가져와서 몇 페이지까지 만들어 줘야하는 지를 판단하기 위한 함수
function make_paging_number($i, $search_title, $genre, $kategorie){
  switch($i){
    case 1:
      // 카테고리 x 장르 x 검색 o 일 경우
      $sql_total = mq("select * from review where title like '%".$search_title."%'");
      $row_total = $sql_total -> num_rows;
      $page_total = $row_total/10;
      $page_if = $row_total%10;
      if($row_total >= 10 && $page_if == 0){
        $page_total -= 1;
      }

      return $page_total;
    break;

    case 2:
      // 카테고리 x 장르 x 검색 x 일 경우
      $sql_total = mq("select * from review");
      $row_total = $sql_total -> num_rows;
      $page_total = $row_total/10;
      $page_if = $row_total%10;
      if($row_total >= 10 && $page_if == 0){
        $page_total -= 1;
      }

      return $page_total;
    break;

    case 3:
      // 카테고리 x 장르 o 검색 o 일 경우
      $sql_total = mq("select * from review where genre = '".$genre."' and title like '%".$search_title."%'");
      $row_total = $sql_total -> num_rows;
      $page_total = $row_total/10;
      $page_if = $row_total%10;
      if($row_total >= 10 && $page_if == 0){
        $page_total -= 1;
      }

      return $page_total;
    break;

    case 4:
      // 카테고리 x 장르 o 검색 x 일 경우
      $sql_total = mq("select * from review where genre = '".$genre."'");
      $row_total = $sql_total -> num_rows;
      $page_total = $row_total/10;
      $page_if = $row_total%10;
      if($row_total >= 10 && $page_if == 0){
        $page_total -= 1;
      }

      return $page_total;
    break;

    case 5:
      // 카테고리 o 장르 x 검색 o 일 경우
      $sql_total = mq("select * from review where kategorie = '".$kategorie."' and title like '%".$search_title."%'");
      $row_total = $sql_total -> num_rows;
      $page_total = $row_total/10;
      $page_if = $row_total%10;
      if($row_total >= 10 && $page_if == 0){
        $page_total -= 1;
      }

      return $page_total;
    break;

    case 6:
      // 카테고리 o 장르 x 검색 x 일 경우
      $sql_total = mq("select * from review  where kategorie = '".$kategorie."'");
      $row_total = $sql_total -> num_rows;
      $page_total = $row_total/10;
      $page_if = $row_total%10;
      if($row_total >= 10 && $page_if == 0){
        $page_total -= 1;
      }

      return $page_total;
    break;

    case 7:
      // 카테고리 o 장르 o 검색 o 일 경우
      $sql_total = mq("select * from review where genre = '".$genre."' and
                       kategorie = '".$kategorie."' and title like '%".$search_title."%'");
      $row_total = $sql_total -> num_rows;
      $page_total = $row_total/10;
      $page_if = $row_total%10;
      if($row_total >= 10 && $page_if == 0){
        $page_total -= 1;
      }

      return $page_total;
    break;

    case 8:
      // 카테고리 o 장르 o 검색 x 일 경우
      $sql_total = mq("select * from review where genre = '".$genre."' and kategorie = '".$kategorie."'");
      $row_total = $sql_total -> num_rows;
      $page_total = $row_total/10;
      $page_if = $row_total%10;
      if($row_total >= 10 && $page_if == 0){
        $page_total -= 1;
      }

      return $page_total;
    break;
  }
}
?>

