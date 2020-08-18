<?php
function get_review_content($fillarray){

$string =
  
    "<div class=\"review_kategorie\" style=\"width:200px\">
    ".$fillarray['genre']." ".$fillarray['kategorie']." ".$fillarray['genre_title']."
    </div>
    <div class=\"review_title\" style=\"width:450px\">
      ".$fillarray['title']."
    </div>
    <div class=\"review_user\" style=\"width:100px\">
      ".$fillarray['id']."
    </div>
    <div class=\"review_date\" style=\"width:200px\">
       ".$fillarray['review_date']."
    </div>
    <div class=\"view_count\" style=\"width:50px\">
      ".$fillarray['view_count']."
    </div>";

    return $string;
  }
  ?>

