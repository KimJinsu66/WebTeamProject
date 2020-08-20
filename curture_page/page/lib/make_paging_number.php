<?php
function make_paging_number($i, $search_title, $genre, $kategorie){
  switch($i){
    case 1:

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

