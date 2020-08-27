<?php
  $url = "./test4.php?review_no=3";
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script type="text/javascript">
    function confirmation() {
    //사용방법은 아래와 같다. answer의 변수를 받아 true/false값에 따라서 맞는 기능을 코딩하면 된다.
      var url = "<?= $url ?>";
      
      var answer = confirm("Leave tizag.com?")
      if (answer){
        alert("Bye bye!")
        window.location = url;
        // document.write(url);
      }
      else{
        alert("Thanks for sticking around!")
        
      }
    }
  </script>
</head>
<body>
  <input type="button" onclick="confirmation()" value="Leave Tizag.com">
</body>
</html>