<?php
//페이징 해주기 위해서 우선 총 게시글 수를 가져와서 몇 페이지까지 만들어 줘야하는 지를 판단하기 위한 함수
function make_paging_number($i, $search_title, $genre, $kategorie){
  switch($i){
    case 1:
      // 카테고리 x 장르 x 검색 o 일 경우
    $sql = mq("SELECT * FROM review WHERE title LIKE '%{$search_title}%'");
        //한페이지에 나올 view 수 
        $numView = 10;
        //review table의 총 레코드 수
        $totalRecord = $sql->num_rows;
        //페이지 수
        $numPage = ceil($totalRecord / $numView);

      return $numPage;

    case 2:
      // 카테고리 x 장르 x 검색 x 일 경우
      $sql = mq("SELECT * FROM review");
        //한페이지에 나올 view 수 
        $numView = 10;
        //review table의 총 레코드 수
        $totalRecord = $sql->num_rows;
        //페이지 수
        $numPage = ceil($totalRecord / $numView);

      return $numPage;

    case 3:
      // 카테고리 x 장르 o 검색 o 일 경우
      $sql = mq("SELECT * FROM review WHERE genre = '{$genre}' and title LIKE '%{$search_title}%'");
        //한페이지에 나올 view 수 
        $numView = 10;
        //review table의 총 레코드 수
        $totalRecord = $sql->num_rows;
        //페이지 수
        $numPage = ceil($totalRecord / $numView);

      return $numPage;

    case 4:
      // 카테고리 x 장르 o 검색 x 일 경우
      $sql = mq("SELECT * FROM review WHERE genre = '{$genre}'");
        //한페이지에 나올 view 수 
        $numView = 10;
        //review table의 총 레코드 수
        $totalRecord = $sql->num_rows;
        //페이지 수
        $numPage = ceil($totalRecord / $numView);

      return $numPage;

    case 5:
      // 카테고리 o 장르 x 검색 o 일 경우
      $sql = mq("SELECT * FROM review WHERE kategore = '{$kategore}' and title LIKE '%{$search_title}%'");
        //한페이지에 나올 view 수 
        $numView = 10;
        //review table의 총 레코드 수
        $totalRecord = $sql->num_rows;
        //페이지 수
        $numPage = ceil($totalRecord / $numView);

      return $numPage;

    case 6:
      // 카테고리 o 장르 x 검색 x 일 경우
      $sql = mq("SELECT * FROM review WHERE kategorie = '{$kategorie}'");
        //한페이지에 나올 view 수 
        $numView = 10;
        //review table의 총 레코드 수
        $totalRecord = $sql->num_rows;
        //페이지 수
        $numPage = ceil($totalRecord / $numView);

      return $numPage;

    case 7:
      // 카테고리 o 장르 o 검색 o 일 경우
      $sql = mq("SELECT * FROM review WHERE kategore = '{$kategore}' and genre = '{$genre}' 
                and title LIKE '%{$search_title}%'");
        //한페이지에 나올 view 수 
        $numView = 10;
        //review table의 총 레코드 수
        $totalRecord = $sql->num_rows;
        //페이지 수
        $numPage = ceil($totalRecord / $numView);

      return $numPage;

    case 8:
      // 카테고리 o 장르 o 검색 x 일 경우
      $sql = mq("SELECT * FROM review WHERE kategore = '{$kategore}' and genre = '{$genre}'");
        //한페이지에 나올 view 수 
        $numView = 10;
        //review table의 총 레코드 수
        $totalRecord = $sql->num_rows;
        //페이지 수
        $numPage = ceil($totalRecord / $numView);

      return $numPage;
  }
}
?>

