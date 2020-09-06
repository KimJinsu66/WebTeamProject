
   <div class="">
    <?php
    // 사용자의 id로 작성되어있는 모든 글을 가져온다 .
    $sql = mq("select * from review where id ='".$_SESSION['id']."'");
    $low = $sql -> num_rows;
    if($low == 0){
      echo "<br><br>{$_SESSION['id']}님이 작성한 글 목록이없습니다!! 새로운 글을 작성해보세요~";
    } else {
    ?>
    <div class="myReview_list">
      <table class="table table-striped">
    <?php
    for($i=0; $i<$low; $i++){  
      $result = $sql -> fetch_array(); ?>      
        <tr>
          <td>
            <!-- for문을 통해 순차대로 db를 가져온는데 해당하는 
            title 을 누르면 링크로 해당하는 url review_no 로 보내줘서 바로 게시글로 이동-->
            <a href="../review_page/review_read.php?review_no=<?=$result['review_no']?>"><?=$result['title']?></a>      
          </td> 
        </tr>
    <?php }?>
      </table>  
    </div>
  </div>
<?php }?>