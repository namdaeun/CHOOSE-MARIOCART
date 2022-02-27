<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Jua&display=swap');  /*웹폰트 링크 불러오기*/

    body
    {
      background-color: rgb(200, 220, 250);   /*색상 값의 표현 - 10진수*/
      font-family: 'Jua', sans-serif;         /*font-family로 폰트 적용*/
      font-size: 20px;
    }
    #title{                                   /*페이지의 제목에 해당하는 id식별자*/
      font-size: 50px;
      padding: 80px;                          /*제목과 본문 사이 공간 띄우기*/
      margin: 0px;                            /*border과 바깥과의 여백 없애기*/
    }

    </style>
  </head>
  <body>
    <input type="button" value="캐릭터 선택하러가기" onclick="location.href='character_button.php'">
    <br><br>
    <h1 id="title">캐릭터 상세정보</h1>
    <?php
      $conn=mysqli_connect("localhost","root","removethestuff18","web");
      $sql="SELECT name, speed, acceleration, handling, friction, weight FROM mario";
      $result=mysqli_query($conn,$sql);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo $row["name"]. " 속도:" . $row["speed"]." 가속도:". $row["acceleration"]. " handling:" . $row["handling"]. " 마찰력:" . $row["friction"]. " 무게:" . $row["weight"]. "<br>";
        }
      }else{
        echo "테이블에 데이터가 없습니다.";
      }
      mysqli_close($conn);
     ?>
    <br><br>

    <h1 id="title">차량 상세정보</h1>
    <?php
      $conn=mysqli_connect("localhost","root","removethestuff18","web");
      $sql="SELECT name, description FROM car";
      $result=mysqli_query($conn,$sql);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo $row["name"]. " 특징:" . $row["description"]. "<br>";
        }
      }else{
        echo "테이블에 데이터가 없습니다.";
      }
      mysqli_close($conn);
    ?>
  </body>
