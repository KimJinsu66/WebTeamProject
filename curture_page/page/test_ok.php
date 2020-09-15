<?php 

include "./db.php";

$media_country = $_POST['media_country'];
$media_genre = $_POST['media_genre'];
$title = $_POST['title'];
$year = $_POST['year'];
$info = $_POST['info'];
$tmpfile = $_FILES['file']['tmp_name'];
$o_name = $_FILES['file']['name'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['file']['name']);
$folder = "./imgs/poster/".$filename;
move_uploaded_file($tmpfile,$folder);

$sql = mq("insert into media(media_country,media_genre,media_title,media_info,media_year,media_file)
values('".$media_country."','".$media_genre."', '".$title."' , '".$info."', '".$year."', '".$o_name."')");




?>