<?php
  // include "../../common/db.php";

  function make_paging($i, $pageNum, $search_title, $genre, $kategorie){

    //페이지에 따라서 게시글 보여줘야하는 index 순서를 변화시켜 주기 위해서  
    // 예) 1페이지 에서는  인덱스 0 부터 10개를 보여줘야하니까  0*10 값이 되어야하고 
    //  2페이지에서는  10번째부터  글을 보여줘야하니까  (2-1)*10 = 10 이라는 알고리즘 
    $criteria = ($pageNum-1)*10;
    switch($i){
      case 1:
        // 카테고리 x 장르 x 검색 o 일 경우
        $sql = mq("select * from review where title like '%".$search_title."%' order by review_no DESC limit $criteria,10");

        return $sql;
        break;
      
      case 2:
        // 카테고리 x 장르 x 검색 x 일 경우
        $sql = mq("select * from review order by review_no DESC limit $criteria,10");
  
        return $sql;
        break;

      case 3:
        // 카테고리 x 장르 o 검색 o 일 경우
        $sql = mq("select * from review where genre = '".$genre."' 
        and title like '%". $search_title."%' order by review_no DESC limit $criteria,10");
    
        return $sql;
        break;

      case 4:
        // 카테고리 x 장르 o 검색 x 일 경우
        $sql = mq("select * from review where genre = '".$genre."' order by review_no DESC limit $criteria,10");
      
        return $sql;
        break;

      case 5:
        // 카테고리 o 장르 x 검색 o 일 경우
        $sql = mq("select * from review where kategorie = '".$kategorie."' 
        and title like '%".$search_title."%' order by review_no DESC limit $criteria,10");
        
        return $sql;
        break;

      case 6:
        // 카테고리 o 장르 x 검색 x 일 경우
        $sql = mq("select * from review where kategorie = '".$kategorie."' order by review_no DESC limit $criteria,10");
          
        return $sql;
        break;

      case 7:
        // 카테고리 o 장르 o 검색 o 일 경우
        $sql = mq("select * from review where kategorie = '".$kategorie."' 
        and genre = '".$genre."' and title like '%".$search_title."%' order by review_no DESC limit $criteria,10");
            
        return $sql;
        break;

      case 8:
        // 카테고리 o 장르 o 검색 x 일 경우
        $sql = mq("select * from review where kategorie = '".$kategorie."' 
        and genre = '".$genre."' order by review_no DESC limit $criteria,10");
            
        return $sql;
        break;
      }
  }
?>