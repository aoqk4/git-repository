<?php
    $r_id = $_POST['id'];
    $r_pw = $_POST['pw'];
    $r_email = $_POST['email'];
    $r_name = $_POST['name'];
    $r_bt = $_POST['bt'];
    $r_year = $_POST['year'];
    echo "입력 데이터<br>";
    echo "아이디 : ", $r_id, "<br>";
    echo "비밀번호 : ", $r_pw, "<br>";
    echo "이메일 : ", $r_email, "<br>";
    echo "성명 : ", $r_name, "<br>";
    echo "생년월일 : ", $r_bt, "<br>";
    echo "나이 : ", $r_year, "<br>";
    
    $db_hostname = '127.0.0.1';
    $db_database = 'test1';
    $db_username = 'ljs2';
    $db_password = '1234';

    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);

    $insert = "INSERT INTO sign_up2 (
        USER_ID, USER_PW, USER_EMAIL, USER_NAME, USER_BRITH, year) VALUES (
            '$r_id','$r_pw','$r_email','$r_name','$r_bt','$r_year')";
    $result = mysqli_query($db_server, $insert);
    if($result == false){
        echo mysql_error($db_server);
    }
?>