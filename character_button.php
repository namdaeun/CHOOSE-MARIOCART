<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>캐릭터 고르기</title>
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
  <form method = "POST" action = "button_mysql.php">
    <h1>캐릭터를 골라보자 !</h1>
    <h3>원하는 캐릭터의 특성을 골라볼까?</h3>
      <table>
        <tr>
          <td>speed (속도)<br></td>
          <td>
            <p><select name="speed" required>
              <option value="A" selected>3.00미만</option>
              <option value="B">3.00이상 3.50미만</option>
              <option value="C">3.50이상 4.00미만</option>
              <option value="D">4.00이상</option>
            </select></p>
          </td>
        </tr>
        <tr>
          <td>acceleration (가속도)<br></td>
          <td>
            <p><select name="acceleration" required>
              <option value="A" selected>3.00미만</option>
              <option value="B">3.00이상 3.50미만</option>
              <option value="C">3.50이상 4.00미만</option>
              <option value="D">4.00이상</option>
            </select></p>
          </td>
        </tr>
        <tr>
          <td>handling (지상 핸들링)<br></td>
          <td>
            <p><select name="handling" required>
              <option value="A" selected>3.00미만</option>
              <option value="B">3.00이상 3.50미만</option>
              <option value="C">3.50이상 4.00미만</option>
              <option value="D">4.00이상</option>
            </select></p>
          </td>
        </tr>
        <tr>
          <td>friction (마찰력)<br></td>
          <td>
            <p><select name="friction" required>
              <option value="A" selected>3.00미만</option>
              <option value="B">3.00이상 3.50미만</option>
              <option value="C">3.50이상 4.00미만</option>
              <option value="D">4.00이상</option>
            </select></p>
          </td>
        </tr>
        <tr>
          <td>weight (무게)<br></td>
          <td>
            <p><select name="weight" required>
              <option value="A" selected>3.00미만</option>
              <option value="B">3.00이상 3.50미만</option>
              <option value="C">3.50이상 4.00미만</option>
              <option value="D">4.00이상</option>
            </select></p>
          </td>
        </tr>
      </table>
      <button>제출</button>
    </form>
  </body>
</html>
