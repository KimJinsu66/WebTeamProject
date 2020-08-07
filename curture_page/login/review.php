<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/review.css">
  </head>
  <body>
    <div class="review">
      <div class="review_title">
        <h1>Review</h1>
      </div>
    <div class="review_form">
      <table cellspacing="1">
          <form action="./check/review_ok.php" method="post" enctype="multipart/form-data">
            <tr>
              <td>장르</td>
              <td>
                <select name="genre">
                  <option value="영화">영화</option>
                  <option value="드라마">드라마</option>
                  <option value="애니메이션">애니메이션</optioon>
                  <option value="다큐">다큐</optioon>
                </select>
              </td>
            <tr>
              <td>kategorie</td>
              <td>
                <select name="kategorie">
                  <option value="음식">음식</option>
                  <option value="장소">장소</option>
                  <option value="놀거리">놀거리</optioon>
                </select>
              </td>
            </tr>
            </tr>
            <tr class="odd_row">
              <td>제목  </td>
              <td><input type="text" name="title" size="100" placeholder="Title"></td>
            </tr>
            <tr class="even_row">
              <td>내용 </td>
              <td><textarea name="description" cols="102" rows="30" placeholder="500자 이내로 적어주세요"></textarea></td>
            </tr>
            <tr class="odd_row">
              <td>이미지 등록 </td>
              <td><input type="file" name="file" value="1"></td>
            </tr>
            <tr>
              <td><input type="submit" name="submit" value="작성" class="submit"></td>
              <td><button type="button" name="button" onclick="location.href='./review_read.php'">돌아가기</button> </td>
            </tr>
          </form>
        </table>
      </div>
    </div>
  </body>
</html>
