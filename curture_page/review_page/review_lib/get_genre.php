<?php
function get_genre(){
 $html_tag = 
    "<nav>
    <ul class=\"nav-container\">
    <li class=\"nav-item\"><a href=\"review_page.php\">HOME</a></li>
      <li class=\"nav-item\"><a href=\"review_page.php?genre=영화&page=1\">映画</a></li>
      <li class=\"nav-item\"><a href=\"review_page.php?genre=드라마&page=1\">ドラマ</a></li>
      <li class=\"nav-item\"><a href=\"review_page.php?genre=애니메이션&page=1\">アニメイシヨン</a></li>
      <li class=\"nav-item\"><a href=\"review_page.php?genre=예능&page=1\">芸能</a></li>
    </ul>
  </nav>";
  return $html_tag;
}



?>
