<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>캐릭터 고르기</title>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Jua&display=swap');  /*웹폰트 링크 불러오기*/

        body
        {
          text-align: center;                     /*텍스트 배열 */
          background-color: rgb(200, 220, 250);   /*색상 값의 표현 - 10진수*/
          font-family: 'Jua', sans-serif;         /*font-family로 폰트 적용*/
          font-size: 50px;
          margin: 200px;
        }
        a
        {
          text-decoration: none;
        }

    </style>
  </head>
  <body>
    <?php
      $speed = $_POST['speed'];
      $acceleration = $_POST['acceleration'];
      $handling = $_POST['handling'];
      $friction = $_POST['friction'];
      $weight = $_POST['weight'];

      $conn = mysqli_connect( 'localhost', 'root', 'removethestuff18', 'web' );
      $sql = "INSERT INTO choose ( speed, acceleration, handling, friction, weight)
        VALUES ( '$speed', '$acceleration', '$handling', '$friction', '$weight');";
      $result=mysqli_query($conn, $sql);

      if($result) {
        echo "등록성공";
        echo '<br><br><a href="your_character.php">나에게 맞는 캐릭터 확인하기</a>';
      }else {
        echo "등록실패";
      }
      mysqli_close($conn);
    ?>
  </body>
</html>
