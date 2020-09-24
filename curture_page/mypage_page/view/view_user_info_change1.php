
  <div class="">
    <?php
    // 현재 사용자의 즐겨찾기 목록을 가져오기 위해서 bookmark table과 members table을 조인해서 db를 가져온다
    $sql = mq("select * from members where id = '".$_SESSION['id']."'");
    $result = $sql -> fetch_array();
    ?>
    <input type="text" name='name' value="<?=$result['name']?>">
    <input type="email" name='email' value="<?=$result['email']?>">
  </div>
 