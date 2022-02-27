<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>맞춤형 캐릭터 발표</title>
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
        .before {
          position: absolute;
          border-top-right-radius: 5px;        /*모든 방향 꼭짓점 둥글게*/
          border-bottom-right-radius: 5px;
          border-top-left-radius: 5px;
          border-bottom-left-radius: 5px;
          background: white;
          font-family: 'Jua', sans-serif;
          text-decoration: none;
          left: 200px;
        }
        .before:hover{
          background-color: rgb(200, 220, 250);      /*마우스를 올렸을 때 버튼의 배경 색상*/
          font-family: 'Jua', sans-serif;
        }
        .move {
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
        .move:hover{
          background-color: rgb(200, 220, 250);      /*마우스를 올렸을 때 버튼의 배경 색상*/
          font-family: 'Jua', sans-serif;
        }
    </style>
  </head>
  <body>
    <h1>당신의 맞춤 캐릭터</h1>
    <h3>분석 결과, 당신의 맞춤 캐릭터는 바로<br></h3>
    <?php
    $conn=mysqli_connect("localhost","root","removethestuff18","web");
    $sql="SELECT * FROM choose order by id desc limit 1";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        if($row['speed']=='A'){
          echo "속도에서는 ". "레미, 키노피오". "<br>";
        }
        else if($row['speed']=='B'){
          echo "속도에서는 ". "고양이피치, 피치". "<br>";
        }
        else if($row['speed']=='C'){
          echo "속도에서는 ". "너구리마리오, 마리오". "<br>";
        }
        else {
          echo "속도에서는 ". "동키콩, 메탈마리오, 쿠파". "<br>";
        }

        if($row['acceleration']=='A'){
          echo "가속도에서는 ". "피치, 너구리마리오, 마리오, 동키콩, 메탈마리오, 쿠파". "<br>";
        }
        else if($row['acceleration']=='B'){
          echo "가속도에서는 ". "레미, 키노피오, 고양이피치". "<br>";
        }
        else {
          echo "가속도에서는 ". "해당하는 캐릭터가 없습니다.". "<br>";
        }

        if($row['handling']=='A'){
          echo "handling에서는 ". "동키콩, 메탈마리오, 쿠파". "<br>";
        }
        else if($row['handling']=='B'){
          echo "handling에서는 ". "너구리마리오, 마리오". "<br>";
        }
        else if($row['handling']=='C'){
          echo "handling에서는 ". "고양이피치, 피치". "<br>";
        }
        else {
          echo "handling에서는 ". "레미, 키노피오". "<br>";
        }

        if($row['friction']=='A'){
          echo "마찰력에서는 ". "해당하는 캐릭터가 없습니다.". "<br>";
        }
        else if($row['friction']=='B'){
          echo "마찰력에서는 ". "메탈마리오, 쿠파". "<br>";
        }
        else if($row['friction']=='C'){
          echo "마찰력에서는 ". "너구리마리오, 마리오, 동키콩". "<br>";
        }
        else {
          echo "마찰력에서는 ". "레미, 키노피오, 고양이피치, 피치". "<br>";
        }

        if($row['weight']=='A'){
          echo "무게에서는 ". "레미, 키노피오". "<br>";
        }
        else if($row['weight']=='B'){
          echo "무게에서는 ". "고양이피치, 피치". "<br>";
        }
        else if($row['weight']=='C'){
          echo "무게에서는 ". "너구리마리오, 마리오". "<br>";
        }
        else {
          echo "무게에서는 ". "동키콩, 메탈마리오, 쿠파". "<br>";
        }
    }
  }
    mysqli_close($conn);
     ?>
    <h3>  입니다 🎉🎉🎉</h3>
    <img src="단체사진.png" class="everybody" width="600" height="350"/></img>
    <p>
      <button class="before" type="button" onclick="location.href='character_button.php';">이전 페이지로 돌아가기</button>
      <button class="move" type="button" onclick="location.href='car_button.php';">차량 선택하러 가기</button>
  </body>
</html>
