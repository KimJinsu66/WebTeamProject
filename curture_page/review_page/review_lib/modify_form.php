<?php
//사진파일이 있을경우 없을 경우에 따라 다르게 조건 
function modify_form($fillarray){
if($fillarray['file'] == ""){
  $string =
  "<form method=\"post\" action=\"./review_check/modify_ok.php\">
   <div class=\"review_imformation_container\" style=\"display:flex; color:darksalmon; font-size:1.5em\">
    <div class=\"\">
      ".$fillarray['country']." > 
    </div>
    <div class=\"\">
      ".$fillarray['genre']." > 
    </div>
    <div class=\"\">
      ".$fillarray['kategorie']." > 
    </div>
    <div class=\"\">
      ".$fillarray['genre_title']."
    </div>
  </div>
  <div class=\"review_title\" style=\"display:flex; font-size:3em\">
  タイトル <input type=\"text\" name=\"title\" value=\"".$fillarray['title']."\">
  
  </div>
  <div class=\"review_user_container\" style=\"display:flex\">
    <div class=\"review_user_id\">
    ".$fillarray['id']."
    </div>
    <div class=\"review_user_rank\">
    ランク : 一般
    </div>
  </div>
  <div class=\"review_date_count_container\" style=\"display:flex; margin-bottom:30px; border-bottom:1px solid black;\">
    <div class=\"review_date\">
     ".$fillarray['review_date']."
     </div>
     <div class=\"review_count\">
     view_count ".$fillarray['view_count']."
     </div>
  </div>
  <div class=\"review_description\" style=\"font-size:1.5em\">
  <textarea name=\"description\" cols=\"100\" rows=\"10\">".$fillarray['description']."</textarea>
  <input type=\"hidden\" name=\"review_no\" value=\"".$_GET['review_no']."\">
  <input type=\"submit\" value=\"수정\">
  </form>
  </div><br><br>";

  return $string;
} else {
$string =
    "<form method=\"post\" action=\"./review_check/modify_ok.php\">
     <div class=\"review_imformation_container\" style=\"display:flex; color:darksalmon; font-size:1.5em\">
      <div class=\"\">
        ".$fillarray['country']." > 
      </div>
      <div class=\"\">
        ".$fillarray['genre']." > 
      </div>
      <div class=\"\">
        ".$fillarray['kategorie']." > 
      </div>
      <div class=\"\">
        ".$fillarray['genre_title']."
      </div>
    </div>
    <div class=\"review_title\" style=\"display:flex; font-size:3em\">
      タイトル <input type=\"text\" name=\"title\" value=\"".$fillarray['title']."\">
    
    </div>
    <div class=\"review_user_container\" style=\"display:flex\">
      <div class=\"review_user_id\">
      ".$fillarray['id']."
      </div>
      <div class=\"review_user_rank\">
      ランク : 一般
      </div>
    </div>
    <div class=\"review_date_count_container\" style=\"display:flex; margin-bottom:30px; border-bottom:1px solid black;\">
      <div class=\"review_date\">
       ".$fillarray['review_date']."
       </div>
       <div class=\"review_count\">
       view_count ".$fillarray['view_count']."
       </div>
    </div>
    <div class=\"review_file\">
       <img src=\"http://localhost/curture_page/review_page/review_imgs/".$fillarray['file']."\" width=\"800px\" height=\"500px\">
    </div>
    <div class=\"review_description\" style=\"font-size:1.5em\">
    <textarea name=\"description\" cols=\"100\" rows=\"10\">".$fillarray['description']."</textarea>
    <input type=\"hidden\" name=\"review_no\" value=\"".$_GET['review_no']."\">
    <input type=\"submit\" value=\"수정\">
    </form>
    </div><br><br>";

    return $string;
    }
  }
  ?>

