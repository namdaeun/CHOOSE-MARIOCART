<!doctype html>
<?php session_start(); ?>
<html>
  <head>
    <meta charset="UTF-8">
    <style>
    body
    {
      text-align: left;                  /*텍스트 배열 */
      background-image:url('mario.jpeg');
      background-repeat: no-repeat;        /*화면에 그림 반복 출력 금지*/
      background-size: cover;              /*이미지가 웹페이지 화면을 모두 덮도록 설정*/
    }
    form
    {
      position: fixed;                     /*위치 - 웹브라우저 화면 전체를 기준으로 배 (스크롤 해도 위치 고정)*/
      background:white;                    /*버튼의 배경 색상*/
      font-size:2em;
      font-weight:bold;                    /*폰트 두께 두껍게*/
      border-top-right-radius: 5px;        /*모든 방향 꼭짓점 둥글게*/
      border-bottom-right-radius: 5px;
      border-top-left-radius: 5px;
      border-bottom-left-radius: 5px;
      padding: 10px;                       /*버튼 내부에서의 테두리 두께*/
      bottom: 200px;                       /*밑에서의 높이*/
      right: 650px;                        /*오른쪽에서의 위치*/
    }
    a
    {
      bottom: 200px;                       /*밑에서의 높이*/
      right: 650px;                        /*오른쪽에서의 위치*/
    }
    </style>
  </head>
  <body>
    <?php
    if(!isset($_SESSION['id'])){ ?>
      <form action="login_accept.php" method="POST">
      <p>
        ID : <input type="text" name="id" placeholder="아이디를 입력하세요"/></p>
      <p>
        PASSWORD : <input type="password" name="pw" placeholder="비밀번호를 입력하세요"/></p>
      <p>
        <input type="submit" value="로그인"/></p>
    </form>
    <?php
    }else{
      $id=$_SESSION['id'];
      echo "<a href=\"main.php\">메인화면</a> ";
      echo "<a href=\"logout.php\">Logout</a></p>";
    } ?>
  </body>
</html>
