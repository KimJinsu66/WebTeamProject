<?php
// 쿼리문을 이용해서 fetch_array 한 값의 결과문을 배열화 하주는 부분
 function get_array($result){
   $array = array(
     'review_no' => "<div class='ad' style='width:50px'>".$result['review_no']."</div>",
     'country' => "<div class='ad' style='width:50px'>".$result['country']."</div>",
     'genre' => "<div class='ad' style='width:100px'>".$result['genre']."</div>",
     'kategorie' => "<div class='ad' style='width:50px'>".$result['kategorie']."</div>",
     'genre_title' => "<div class='ad' style='width:100px'>".$result['genre_title']."</div>",
     'title' => "<div class='ad' style='width:400px'>".$result['title']."</div>",
     'id' => "<div class='ad' style='width:50px'>".$result['id']."</div>",
     'review_date' => "<div class='ad' style='width:150px'>".$result['review_date']."</div>",
     'view_count' => "<div class='ad' style='width:50px'>".$result['view_count']."</div>"
     );

     return $array;
 }
 ?>
