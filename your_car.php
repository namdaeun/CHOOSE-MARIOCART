<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>차량 발표</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jua&display=swap');
        h1 {
          margin: 100px;
          font-size: 200%;
        }
        body {
          text-align: center;                     /*텍스트 배열 */
          background-color: #fff7dc;
          font-family: 'Jua', sans-serif;         /*font-family로 폰트 적용*/
        }
        .everybody{
          position: static;                   /*위치 - 웹브라우저 화면 전체를 기준으로 배치 (스크롤 해도 위치 고정)*/
          padding: 10px;                       /*버튼 내부에서의 테두리 두께*/
          bottom: 200px;             /*밑에서의 높이*/
        }
        .button {
          position: absolute;
          border-top-right-radius: 5px;        /*모든 방향 꼭짓점 둥글게*/
          border-bottom-right-radius: 5px;
          border-top-left-radius: 5px;
          border-bottom-left-radius: 5px;
          background: white;
          font-family: 'Jua', sans-serif;
          text-decoration: none;
          right: 200px;
        }
        .button:hover{
          background-color: #fff7dc;      /*마우스를 올렸을 때 버튼의 배경 색상*/
          font-family: 'Jua', sans-serif;
        }
        .car {
          position: static;                   /*위치 - 웹브라우저 화면 전체를 기준으로 배치 (스크롤 해도 위치 고정)*/
          padding: 10px;                       /*버튼 내부에서의 테두리 두께*/
          bottom: 200px;             /*밑에서의 높이*/
        }
    </style>
  </head>
<body>
  <h1>당신이 선택한 차량</h1>
  <h3>당신이 선택한 차량은<br></h3>
  <?php
  $conn = mysqli_connect("localhost","root","removethestuff18","web");
  $sql = "SELECT car FROM choose_car order by id desc limit 1";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo $row["car"];
    }
  }else{
    echo "테이블에 데이터가 없습니다.";
  }
  mysqli_close($conn); // 디비 접속 닫기
  ?>
  <img src="car.png" class="car" width="500" height="500"/></img>
  <button class="button" type="button" onclick="location.href='main.php';">처음으로 돌아가기</button>
  <h3>입니다 🎉🎉🎉</h3>
</body>
