<?php
// 댓글 작성 기능 부분을 함수화 시킴
function get_commentWrite($mem_no, $comment){
 
    $string = "<form action=\"./review_check/comment_ok.php\" method=\"post\">
    <input type=\"hidden\" name=\"mem_no\" value=\"$mem_no\">
    <input type=\"hidden\" name=\"review_no\" value=\"$comment\">
    <textarea name=\"comment\" rows=\"5\" cols=\"150\"></textarea>
    <input type=\"submit\" name=\"submit\" value=\"댓글\">
    </form>";
    return $string;
}
 ?>
