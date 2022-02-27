<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Jua&display=swap');  /*웹폰트 링크 불러오기*/

    body
    {
      text-align: center;                     /*텍스트 배열 */
      background-color: rgb(200, 220, 250);   /*색상 값의 표현 - 10진수*/
      font-family: 'Jua', sans-serif;         /*font-family로 폰트 적용*/
    }
    #title{                                   /*페이지의 제목에 해당하는 id식별자*/
      font-size: 50px;
      padding: 80px;                          /*제목과 본문 사이 공간 띄우기*/
      margin: 0px;                            /*border과 바깥과의 여백 없애기*/
    }
    p{                                       /*캐릭터를 설명하는 텍스트 꾸미기*/
      position: relative;
      color: #ffffff;                        /*글자 색깔 : 흰색*/
      width: 300px;                          /*텍스트 공간의 너비*/
      height: 45px;                          /*텍스트 공간의 높이*/
      left: 550px;                           /*왼쪽에서 550px만큼 움직인 곳에 위치*/
      background-color: #F2CB61;             /*텍스트가 입력된 공간의 배경색 지정*/
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
    </style>
    <title>
      캐릭터 소개
    </title>
  </head>
  <body>
    <input type="button" class="button" value="캐릭터 상세보기" onclick="location.href='character_mysql.php'"><br><br>
    <input type="button" class="button" value="캐릭터 선택하러가기" onclick="location.href='character_button.php'">
    <h1 id="title">나에게 맞는 캐릭터를 골라보자! </h1>
    <div class="character">
      <class="mario">
      <!--이미지에 따른 클래스 부여 - 아직 못써먹었음-->
        <img class="mario_img"src="마리오.png" width="200" height="250"/>     <!--이미지 가져오고 이미지의 너비와 높이 지정해줌-->
        <p>난 2단 3단 점프가 가능한 '점프의 대가' 마리오야!<br>
        </p>
      </a>
      <a class="raccon">
        <img class="raccon_img"src="너구리마리오.png" class="raccon" width="220" height="250"/>
        <p>난 너구리 슈트를 쓰면 무적 너구리로 변하는 너구리마리오야!</p>
      </a>
      <a class="remi">
        <img class="remi_img"src="레미.png" class="remi" width="200" height="250"/>
        <p>난 움직임이 민첩한 레미야! 난 꼬맹이라고 불리는 걸 싫어해</p>
      </a>
      <a class="toad">
        <img class="toad_img"src="키노피오.png" class="toad" width="180" height="250"/>
        <p>난 빠른 가속도를 자랑하는 버섯 왕국 시민, 키노피오야!</p>
      </a>
      <a class="peach">
        <img class="peach_img"src="피치.png" class="peach" width="200" height="300"/>
        <p>난 버섯 왕국 공주 피치야! 난 팀원들의 기력을 회복시켜주는 능력을 갖고있어!</p>
      </a>
      <a class="cat">
        <img class="cat_img"src="고양이피치.png"  width="200" height="250"/>
        <p>난 피치보다 가속도가 뛰어난 고양이피치야!</p>
      </a>
      <a class="metal">
        <img class="metal_img"src="메탈마리오.png" class="metal" width="180" height="250"/>
        <p>난 무거운 만큼 속도도 빠른 메탈마리오야!</p>
      </a>
      <a class="donkey">
        <img class="donkey_img"src="동키콩.png" class="donkey" width="200" height="250"/>
        <p>난 마리오의 라이벌 동키콩이야!</p>
      </a>
      <a class="kupa">
        <img class="kupa_img"src="쿠파.png" class="kupa" width="200" height="250"/>
        <p>난 여기 있는 캐릭터 중 속도가 가장 높은 쿠파야! 마리오의 숙적이기도 하지</p>
      </a>
    </div>
  </body>
</html>
