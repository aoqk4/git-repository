<?php
    $r_PIN = $_POST['pin'];
    $r_CODE = $_POST['code'];
    $r_PW = $_POST['pw'];
    $r_EMAIL = $_POST['e_mail'];
    echo "가입이 완료었습니다.<br>";
    echo "입력 데이터<br>";
    echo "핀 : ", $r_PIN, "<br>";
    echo "코드 6자리 : ", $r_CODE, "<br>";
    echo "비밀번호 : ", $r_PW, "<br>";
    echo "이메일 : ", $r_EMAIL, "<br>";
    
    $db_hostname = '127.0.0.1';
    $db_database = 'test1';
    $db_username = 'ljs2';
    $db_password = '1234';

    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);

    $insert = "INSERT INTO sign_up4 (
        PIN, CODE, PW, EMAIL) VALUES (
            '$r_PIN','$r_CODE','$r_PW','$r_EMAIL')";
    $result = mysqli_query($db_server, $insert);
    if($result == false){
        echo mysql_error($db_server);
    }

    $delete = "DELETE sign_up4 WHERE PIN = '111231313'";
?>