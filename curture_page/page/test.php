<?php
    include "../common/db.php";
    include "./test_lib.php";

    $sql = mq("select * from review order by review_no desc limit 0,4");
    $low = $sql -> num_rows;
    $result = $sql -> fetch_array();

    $array = get_array($result);

        echo $array['review_no'];
        echo $array['country'];
?>
