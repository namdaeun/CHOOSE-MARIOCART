<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>차량 고르기</title>
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Jua&display=swap');  /*웹폰트 링크 불러오기*/

      body
      {
        background-color: rgb(200, 220, 250);   /*색상 값의 표현 - 10진수*/
        font-family: 'Jua', sans-serif;         /*font-family로 폰트 적용*/
      }
      h1 {
        text-align: center;   /*제목 중앙 배열*/
        padding : 20px;
      }
      h3 {
        border-top: 2px solid grey; padding-top: 30px;     /*제목과 부제목이 구별되도록 회색 선을 그어 주었다.*/
      }

      table {
        border-spacing: 20px;      /*표 성분들 사이의 공간*/
      }
      .button {
        text-align: center;                     /*텍스트 가운데 배열 */
        font-family: 'Jua', sans-serif;
      }
      </style>
    </head>
    <body>
  <form method = "POST" action = "car_button_mysql.php">
    <h1>차량을 골라보자 !</h1>
    <h3>원하는 차량을 골라볼까?</h3>
    <p><select name="car" required>
      <option value="cart" selected>카트</option>
      <option value="driftbike">드리프트바이크</option>
      <option value="ATV">ATV</option>
      <option value="glider">글라이더</option>
    </select></p>
      <button>제출</button>
    </form>
  </body>
</html>
