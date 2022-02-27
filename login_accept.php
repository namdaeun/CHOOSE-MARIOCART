<?php
    if (!isset($_POST['id']) || !isset($_POST['pw']) ) {
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호가 없거나 접속이 잘못되었습니다.');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $members = array(
        'A' => array('password' => 'aaa'),
        'B' => array('password' => 'bbb'),
        'C' => array('password' => 'ccc'),
    );
    /* 후에 mysql에 저장하고 활용 */

    if(!isset($members[$id]) || $members[$id]['password'] != $pw ) {
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호 오류');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }

    session_start();
    $_SESSION['id'] = $id;
?>
<meta http-equiv="refresh" content="0;url=character.php" />
