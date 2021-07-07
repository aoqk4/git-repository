<?php
    $r_id = $_POST['id'];
    $r_pw = $_POST['pw'];
    echo "가입이 완료었습니다.<br>";
    echo "입력 데이터<br>";
    echo "아이디 : ", $r_id, "<br>";
    echo "비밀번호 : ", $r_pw, "<br>";
    
    $db_hostname = '127.0.0.1';
    $db_database = 'test1';
    $db_username = 'ljs2';
    $db_password = '1234';

    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);

    $insert = "INSERT INTO sign_up3 (
        USER_ID, PW) VALUES (
            '$r_id','$r_pw')";
    $result = mysqli_query($db_server, $insert);
    if($result == false){
        echo mysql_error($db_server);
    }
?>