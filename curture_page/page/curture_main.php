<!DOCTYPE html>
<?php
  include "../common/db.php";
  include "../page/review/lib/get_array.php";
  include "../page/review/lib/comment_lib.php";
  include "../page/review/lib/get_content.php";
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>일본페이지</title>
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="titleImg" href="../home/imgs/favicon.png">
  <link rel="stylesheet" href="curture/css/mainTextAndreviewLayout.css">

  <link rel="stylesheet" href="curture/css/curture_main.css">

  <!-- 폰트 어썸 백터 아이콘 가져오기 -->
  <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous">
  </script>

  <!-- 구글 폰트 가져오기 -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../home/css/default.css" />
  <link rel="stylesheet" href="../header/style.css">

  <script src="../home/js/main.js" defer></script>

  <!--고정 headere-->
  <?php include "../header/header.php"; ?>
</head>

<body>

<div class= "img">
  <img src="curture/image/pic5.jpg">
    <div class= "content">
      <h1> 일본 </h1>
    </div>
</div>

<nav>
  <ul class="nav-container">
    <li class="nav-item"><a href="curture_main.php?genre=영화">영화</a></li>
    <li class="nav-item"><a href="curture_main.php?genre=드라마">드라마</a></li>
    <li class="nav-item"><a href="curture_main.php?genre=애니메이션">애니메이션</a></li>
    <li class="nav-item"><a href="curture_main.php?genre=예능">예능</a></li>
  </ul>
</nav>

<br>
<br>

<div class="dropdown">
  <button class="dropbtn">카테고리선택</button>
  <div class="dropdown-content">
    <?php if(isset($_GET['genre'])){ ?>
    <a href="curture_main.php?genre=<?=$_GET['genre']?>&kategorie=음식">음식</a>
    <a href="curture_main.php?genre=<?=$_GET['genre']?>&kategorie=장소">장소</a>
    <a href="curture_main.php?genre=<?=$_GET['genre']?>&kategorie=놀거리">놀거리</a>
  <?php } else {?>
    <a href="curture_main.php?kategorie=음식">음식</a>
    <a href="curture_main.php?kategorie=장소">장소</a>
    <a href="curture_main.php?kategorie=놀거리">놀거리</a>
  <?php } ?>
</div>
</div>
<div class="main">
  <div class="main_title">
   review
  </div>
  <div class="main_subtitle">
    여기는 회원분들의 리뷰를 볼 수 있는 곳입니다. 매너있게 사용해주세요~!
  </div>
</div>
<div class="search">    <!--장르를 선택하고 검색하기 위해서 사용되는 form 태그-->
    <div class="search_title">
      <form method="post">
      <input type="text" name="search_title" size="30" placeholder="찾으시는 키워드를 입력해주세요">
      <input type="submit" name="submit" value="검색">
      <button type="button" name="button" onclick="location.href='review/review.php'">글쓰기</button>
      <button type="button" name="button" onclick="location.href='./curture_main.php'">홈으로</button></form>
    </div>
  </div>
  <?php
    // genre 와 kategorie 값이 없을경우 , 즉 처음에 화면 들어왔을때 모든 게시판이 보이도록 (limit 사용해서 최대 5개 ) 해주는 코딩
    if(!isset($_GET['genre']) && !isset($_GET['kategorie'])){
      if(isset($_POST['search_title'])){  // + 추가적으로 키워드를 검색 했을경우에는 쿼리문에 like "키워드"를 통해서 원하는 title을 볼 수 있다.
        $sql = mq("select * from review where title like '%".$_POST['search_title']."%' order by review_no DESC limit 0,5");
      } else{
        $sql = mq("select * from review order by review_no DESC limit 0,5");
      }
      $low = $sql -> num_rows;
      for($i=1; $i<=$low; $i++){
        $result =$sql -> fetch_array();

        //result5에 fetch_array된 필드와 데이타들을 fillarray에 각 필드명별로 인덱스를 만들어서 데이터를 저장시키는 함수
        $fillarray = get_array($result);
          echo get_content($fillarray);
          ?>
              <div class="review_delete">
                <?php
                // 글 삭제하는 기능인데 if 조건을 사용해서 현제 session에 저장되어있는 (로그인 되어있는 id) id 값과 현제 게시글 id와 비교해서
                // 같을경우에만  삭제 버튼이 보이게해서 글작성자만 삭제할 수 있도록 만들어 놨습니ek.
                if(isset($_SESSION['id'])){
                if($_SESSION['id'] == $fillarray['id']){?>
                <form action="../login/check/review_delete.php" method="post">
                  <input type="submit" value="삭제">
                  <input type="hidden" name="delete" value="<?=$fillarray['review_no']?>">
                </form>
               <?php }
              } ?>
              </div>
            </div>
            <div class="comment">
              <?php
             // 리뷰db와 댓글db를 join해서 만약 댓글이 존재한다면 댓글이 보이게 해주는 코딩
              $sql2 = mq("select * from comment, review where comment.reviewNum=review.review_no and comment.reviewNum ='".$fillarray['review_no']."'");
              $low2 = $sql2 ->num_rows;
              if(!$low2 == 0){
              for($j=1; $j<=$low2; $j++){
                $result2 =$sql2 -> fetch_array();

                echo "작성자   " .$result2['id']."<br>";
                echo "내용     ".$result2['comment']."<br>";
                echo "date     ".$result2['comment_date']."<br><br>";
                }
              }
              // 댓글창을 함수화 해놓은 것을 가져다가 씀
              echo commentWrite(1, $fillarray['mem_no'],$fillarray['review_no'], "","");
              ?>
            </div>
          </div>
        <?php }   // genre 만 선택하고 kategorie 는 선택하지 않았을경우의 게시글을 보여주는 코딩
        } else if (isset($_GET['genre']) && !isset($_GET['kategorie'])){
          if(isset($_POST['search_title'])){  // + 추가적으로 키워드를 검색 했을경우에는 쿼리문에 like "키워드"를 통해서 원하는 title을 볼 수 있다.
            $sql3 = mq("select * from review where genre = '".$_GET['genre']."' and title like '%".$_POST['search_title']."%' order by review_no DESC limit 0,5");
          } else{
            $sql3 = mq("select * from review where genre = '".$_GET['genre']."' order by review_no DESC limit 0,5");
          }
          $low3 = $sql3 -> num_rows;
          for($i=1; $i<=$low3; $i++){
            $result3 =$sql3 -> fetch_array();

            //result5에 fetch_array된 필드와 데이타들을 fillarray에 각 필드명별로 인덱스를 만들어서 데이터를 저장시키는 함수
            $fillarray2 = get_array($result3);
              ?>
              <div class="total">
              <?php echo get_content($fillarray2); ?>
              

                  <div class="review_delete">
                    <?php
                    if(isset($_SESSION['id'])){
                    if($_SESSION['id'] == $fillarray2['id']){?>
                    <form action="review/check/review_delete.php" method="post">
                      <input type="submit" value="삭제">
                      <input type="hidden" name="delete" value="<?=$fillarray2['review_no']?>">
                    </form>
                   <?php }
                  } ?>
                  </div>
                </div>
                <div class="comment">
                  <?php
                 // 리뷰db와 댓글db를 join해서 만약 댓글이 존재한다면 댓글이 보이게 해주는 코딩
                  $sql4 = mq("select * from comment, review where comment.reviewNum=review.review_no and comment.reviewNum ='".$fillarray2['review_no']."'");
                  $low4 = $sql4 ->num_rows;
                  if(!$low4 == 0){
                  for($j=1; $j<=$low4; $j++){
                    $result4 =$sql4 -> fetch_array();

                    echo "작성자   " .$result4['id']."<br>";
                    echo "내용     ".$result4['comment']."<br><br>";
                    echo "date     ".$result4['comment_date']."<br><br>";

                    }
                  }
                  // 댓글창을 함수화 해놓은 것을 가져다가 씀
                  echo commentWrite(2, $fillarray2['mem_no'],$fillarray2['review_no'], $_GET['genre'],"");
                  ?>
                </div>
              </div>
            <?php }  // kategorie만 선택하고 genre는 선택하지 않았을경우의 게시글
            }  else if (!isset($_GET['genre']) && isset($_GET['kategorie'])){
              if(isset($_POST['search_title'])){  // + 추가적으로 키워드를 검색 했을경우에는 쿼리문에 like "키워드"를 통해서 원하는 title을 볼 수 있다.
                $sql5 = mq("select * from review where kategorie = '".$_GET['kategorie']."' and title like '%".$_POST['search_title']."%' order by review_no DESC limit 0,5");
              } else{
                $sql5 = mq("select * from review where kategorie = '".$_GET['kategorie']."' order by review_no DESC limit 0,5");
              }
              $low5 = $sql5 -> num_rows;
              for($i=1; $i<=$low5; $i++){
                $result5 =$sql5 -> fetch_array();

                //result5에 fetch_array된 필드와 데이타들을 fillarray에 각 필드명별로 인덱스를 만들어서 데이터를 저장시키는 함수
                $fillarray3 = get_array($result5);

                echo get_content($fillarray3);

                  ?>

                      <div class="review_delete">
                        <?php
                        if(isset($_SESSION['id'])){
                        if($_SESSION['id'] == $fillarray3['id']){?>
                        <form action="review/check/review_delete.php" method="post">
                          <input type="submit" value="삭제">
                          <input type="hidden" name="delete" value="<?=$fillarray3['review_no']?>">
                        </form>
                       <?php }
                      } ?>
                      </div>
                    </div>
                    <div class="comment">
                      <?php
                     // 리뷰db와 댓글db를 join해서 만약 댓글이 존재한다면 댓글이 보이게 해주는 코딩
                      $sql6 = mq("select * from comment, review where comment.reviewNum=review.review_no and comment.reviewNum ='".$fillarray3['review_no']."'");
                      $low6 = $sql6 ->num_rows;
                      if(!$low6 == 0){
                      for($j=1; $j<=$low6; $j++){
                        $result6 =$sql6 -> fetch_array();
                        echo "작성자   " .$result6['id']."<br>";
                        echo "내용     ".$result6['comment']."<br><br>";
                        echo "date     ".$result6['comment_date']."<br><br>";
                        }
                      }
                      // 댓글창을 함수화 해놓은 것을 가져다가 씀
                      echo commentWrite(3, $fillarray3['mem_no'],$fillarray3['review_no'], "",$_GET['kategorie']);
                        ?>                                          
                    </div>
                  </div>
                <?php }  // genre와 kategorie 모두를 선택해서 두가지 조건에 맞는 게시글을 보여주는 경우
                } else if (isset($_GET['genre']) && isset($_GET['kategorie'])){
                  if(isset($_POST['search_title'])){  // + 추가적으로 키워드를 검색 했을경우에는 쿼리문에 like "키워드"를 통해서 원하는 title을 볼 수 있다.
                    $sql7 = mq("select * from review where kategorie = '".$_GET['kategorie']."' and genre = '".$_GET['genre']."' and title like '%".$_POST['search_title']."%' order by review_no DESC limit 0,5");
                  } else{
                    $sql7 = mq("select * from review where kategorie = '".$_GET['kategorie']."' and genre = '".$_GET['genre']."' order by review_no DESC limit 0,5");
                  }
                  $low7 = $sql7 -> num_rows;
                  for($i=1; $i<=$low7; $i++){
                    $result7 =$sql7 -> fetch_array();

                    //result5에 fetch_array된 필드와 데이타들을 fillarray에 각 필드명별로 인덱스를 만들어서 데이터를 저장시키는 함수
                    $fillarray4 = get_array($result7);

                    echo get_content($fillarray4);
                      ?>

                          <div class="review_delete">
                            <?php
                            if(isset($_SESSION['id'])){
                            if($_SESSION['id'] == $fillarray4['id']){?>
                            <form action="../login/check/review_delete.php" method="post">
                              <input type="submit" value="삭제">
                              <input type="hidden" name="delete" value="<?=$fillarray4['review_no']?>">
                            </form>
                           <?php }
                          } ?>
                          </div>
                        </div>
                        <div class="comment">
                          <?php
                         // 리뷰db와 댓글db를 join해서 만약 댓글이 존재한다면 댓글이 보이게 해주는 코딩
                          $sql8 = mq("select * from comment, review where comment.reviewNum=review.review_no and comment.reviewNum ='".$fillarray4['review_no']."'");
                          $low8 = $sql8 ->num_rows;
                          if(!$low8 == 0){
                          for($j=1; $j<=$low8; $j++){
                            $result8 =$sql8 -> fetch_array();
                            echo "작성자   " .$result8['id']."<br>";
                            echo "내용     ".$result8['comment']."<br><br>";
                            echo "date     ".$result8['comment_date']."<br><br>";
                            }
                          }
                          // 댓글창을 함수화 해놓은 것을 가져다가 씀
                          echo commentWrite(4, $fillarray4['mem_no'],$fillarray4['review_no'], $_GET['genre'],$_GET['kategorie']);
                          ?>
                        </div>
                      </div>
                      <?php }
                    } ?>
  </body>
</html>
