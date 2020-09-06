
  <div class="">
    <?php
    // 현재 사용자의 즐겨찾기 목록을 가져오기 위해서 bookmark table과 members table을 조인해서 db를 가져온다
    $sql = mq("select * from members_bookmark as book, members as mem 
              where book.membersNum = mem.mem_no and id = '".$_SESSION['id']."'");
    $result = $sql -> fetch_array();
    if(($sql -> num_rows) == 0 || $result['reviewNum'] == ""){
      echo "<br><br>즐겨찾기 목록이없습니다!! 원하시는 글을 즐겨찾기 해보세요~";
    } else {
      
    //즐겨찾기 목록을 string 형태로 다 가져옮
    $array = $result['reviewNum'];
    // explode(); 는 string 형태의 data를  ','라는 특수문자를 기준으로 나눠서 배열로 만들어준다
    $bookmark_array = explode(',', $array);
    ?>
    <div class="bookmark_list">
      <table class="table table-striped">
    <?php
    //count($bookmark_array) 를 통해서 배열의 갯수만큼 반복시켜서 모든 즐겨찾기를 가져올 수 있도록
    for($i=0; $i<count($bookmark_array); $i++){  
      $sql2 = mq("select * from review where review_no ='".$bookmark_array[$i]."'");
      $result2 = $sql2 -> fetch_array(); ?>
        <tr>
          <td>
            <!-- 즐겨찾기 번호에 해당하는 title을 보여주고, 링크로 해당하는 
            url review_no로 보내주면 해당 게시글로 바로 이동한다 -->
            <a href="../review_page/review_read.php?review_no=<?=$bookmark_array[$i]?>"><?=$result2['title']?></a>      
          </td> 
        </tr>
    <?php }?>
      </table>  
    </div>
  </div>
<?php } ?>
 