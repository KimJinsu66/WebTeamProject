
<?php include "../header/header.php"

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>엔터트립 :: 미디어 성지순례</title>

    <!-- 페비콘 가져오기 -->
    <link rel="icon" type="titleImg" href="imgs/favicon.png">

    <!-- 폰트 어썸 백터 아이콘 가져오기 -->
    <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous">
    </script>

    <!-- 구글 폰트 가져오기 -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- HTML 속성 초기화 CSS 가져오기 -->
    <link rel="stylesheet" href="css/default.css" />

    <!-- CSS 스타일 가져오기 -->
    <link rel="stylesheet" href="../header/style.css">

    <!-- 자바스크립트 가져오기 -->
    <script src="js/main.js" defer></script>

</head>

<body>
    <!-- 메인 -->

    <!-- 이미지 슬라이더 -->
    <div class="slider">
        <div class="slide" style="background-image: url(imgs/slide1.jpeg);"></div>
        <div class="slide" style="background-image: url(imgs/slide2.jpeg);"></div>
        <div class="slide" style="background-image: url(imgs/slide3.jpg);"></div>
        <a class="prev" onclick="button_click(-1)">&#10094</a>
        <a class="next" onclick="button_click(1)">&#10095</a>
    </div>
</body>
</html>
