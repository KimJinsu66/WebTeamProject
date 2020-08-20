<?php
include "log_head.php";

?>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <?php
       if (isset($_SESSION['id']) ) {
         session_start();
         session_unset(); // 세션제거
         session_destroy(); // 세션삭제
          echo "<script>alert('로그아웃'); location.href='../home/index.php';</script>";
        }
      ?>
</body>
</html>
