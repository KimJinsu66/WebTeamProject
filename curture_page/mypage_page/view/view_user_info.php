<?php
require_once('../review_page/review_lib/get_class.php');

//각 항목마다 url에 page 번호를 매겨서 현재 페이지에서 url에 따라서 내용물만 변하게 하기위해서 조건을 각각 주었습니다.
//mypage의 초기 화면일 경우
if(!isset($_GET['page'])){
  //회원의 개인정보들을 보여주기위해서 db에서 호출
  $sql = mq("select * from members where id = '".$_SESSION['id']."'");
  $result = $sql -> fetch_array();
  $fillarray = $get -> get_array_user($result);
  //항목마다 테이블을 만들면 코딩이 너무 길어져서  반복문을 사용하기 위해서 배열에 넣었다.
  $user_field = ['사용자 이름','생일','성별','계정 이메일'];
  $user_content = ['name','birthday','gender','email']; ?>

<div class ="user_info">
  <div class="user_id">
    <strong><?=$_SESSION['id']?></strong> 님의 정보입니다.<br>
    <span>회원정보는 개인정보처리방침에 따라 안전하게 보호되며, 
      회원님의 명백한 동의 없이 공개 또는 제 3자에게 제공되지 않습니다.</span>
  </div>
  <div class="user_table">
    <table class="table table-striped">
      <tr height="150px">
        <th width="200px">
          <div class="table_title">등급</div>
        </th>
        <td>
          <div class="table_content">
            <div><?=$fillarray['rank']?></div>
            <div><small>홈페이지에서 많이 활동하면 등급을 올려서 더 많은 혜택을 받을 수 있어요~!.</small></div>
          </div>
        </td>
      </tr>
  <?php 
    for($i=0; $i<count($user_field); $i++){ ?>
      <tr height="150px">
        <th width="200px">
          <div class="table_title">
            <?=$user_field[$i]?>
          </div>          
        </th>
        <td>
          <div class="table_content">
            <div><?=$fillarray[$user_content[$i]]?></div>
            <div><small>이름이나 생년월일, 성별 등의 정보가 변경되었다면 
              본인확인을 통해 정보를 수정할 수 있습니다.</small></div>
            <div>수정</div>
          </div>
        </td>
      </tr>
      <?php }?>
    </table>
  </div>
</div>

<?php } ?>