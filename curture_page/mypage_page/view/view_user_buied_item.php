
  <div class="">
    <?php
    // 현재 사용자의 즐겨찾기 목록을 가져오기 위해서 bookmark table과 members table을 조인해서 db를 가져온다
    $sql = mq("select * from members as mem, itemshop as item 
              where mem.buied_item_num = item.item_no and id = '".$_SESSION['id']."'");
    $result = $sql -> fetch_array();
    if(($sql -> num_rows) == 0 || $result['buied_item_num'] == ""){
      echo "<br><br>아이템 목록이 없습니다~";
    } else {
      
    //즐겨찾기 목록을 string 형태로 다 가져옮
    $array = $result['buied_item_num'];
    // explode(); 는 string 형태의 data를  ','라는 특수문자를 기준으로 나눠서 배열로 만들어준다
    $bookmark_array = explode(',', $array);
    ?>
    <div class="bookmark_list">
    <div class="row">
    <?php
    //count($bookmark_array) 를 통해서 배열의 갯수만큼 반복시켜서 모든 즐겨찾기를 가져올 수 있도록
    for($i=0; $i<count($bookmark_array); $i++){  
      $sql2 = mq("select * from itemshop where item_no ='".$bookmark_array[$i]."'");
      $result2 = $sql2 -> fetch_array(); ?>
   
            <!-- 즐겨찾기 번호에 해당하는 title을 보여주고, 링크로 해당하는 
            url review_no로 보내주면 해당 게시글로 바로 이동한다 -->
          <div class="margin">
            <div class="card cols-m-2" style="width: 18rem;">
              <img src="http://localhost/curture_page/pointshop_page/pointshop_imgs/<?=$result2['item_img']?>" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text"><?=$result2['item_name']?></p>
              </div>
             </div>            
          </div>
        <?php }?>
      </div>
    </div>
  </div>
<?php } ?>
 