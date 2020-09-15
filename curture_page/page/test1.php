<?php
    include "../common/db.php";
    include "./test_lib.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>무한 스크롤</title>
    <script type="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
    <style></style>
    <script>
      
      $(function () {

        

        $(window).scroll(function (evt) {
          var nowScrollVar = $(this).scrollTop();
          var nowScrollVar2 = $(this).height();
          var contentH = $("#divContent").height(); //문서 전체 내용을 갖는 div의 높이
          console.log(nowScrollVar);
          console.log(nowScrollVar2);
          console.log(contentH);
          
          
          if (nowScrollVar + nowScrollVar2 + 1 >= contentH) {
            // 스크롤바가 아래 쪽에 위치할 때
            <?php 
           $total_sql = mq("select * from review");
           $total_low = $total_sql -> num_rows;
           $low_count = $total_low/4;
           for($i=0; $i<$low_count; $i++){
             $num = $i*4;
           $sql = mq("select * from review order by review_no desc limit $num,4");
           $low = $sql -> num_rows; 
            for($j=0; $j<$low; $j++){
              $result = $sql -> fetch_array();                   
              
              $array = get_array($result);    
            ?>
            
            var text = {
              'review_no': "<?=$array['review_no']?>",
              'country': "<?=$array['country']?>",
              'genre': "<?=$array['genre']?>",
              'kategorie': "<?=$array['kategorie']?>",
              'genre_title': "<?=$array['genre_title']?>",
              'title': "<?=$array['title']?>",
              'id': "<?=$array['id']?>",
              'review_date': "<?=$array['review_date']?>",
              'view_count': "<?=$array['view_count']?>"
            };

              $("#divContent").append(text['review_no'],text['country'],text['genre'],text['kategorie'],text['genre_title'],text['title'],text['id'],text['review_date'],text['view_count']).delay(2000);
              $("#divContent").append("<br>");
                                                    
              <?php }
           } ?>
          }
        });
      });
    </script>
    <style>
      .ad{
        display:inline-block;
        background:darksalmon;
        display: inline-block;
        width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis; 
      }
      .as{
        background:blue;
      }
    </style>
  </head>
  <body>
    <div id="div01" style="overflow-y: scroll;">
      <div id="divContent">
        <img
          src="https://t1.daumcdn.net/cfile/tistory/9940D03D5A584CCD0C"
        /><br />
        <img
          src="https://t1.daumcdn.net/cfile/tistory/99F7323D5A584CCE1C"
        /><br />
        <img
          src="https://t1.daumcdn.net/cfile/tistory/9948143D5A584CD10A"
        /><br />
      </div>
    </div>
  </body>
</html>
