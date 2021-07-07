<?php
    $r_id = $_POST['id'];
    $r_pw = $_POST['pw'];
    $r_r_pw = $_POST['r_pw'];
    $r_name = $_POST['name'];
    $r_bt = $_POST['bt'];
    $r_ge = $_POST['ge'];
    $r_email = $_POST['e_mail'];
    echo "받아온 데이터<br>";
    echo $r_id, "<br>";
    echo $r_pw, "<br>";
    echo $r_r_pw, "<br>";
    echo $r_name, "<br>";
    echo $r_bt, "<br>";
    echo $r_ge, "<br>";
    echo $r_email, "<br>";

    // login
    $db_hostname = '127.0.0.1';
    $db_database = 'test1';
    $db_username = 'ljs2';
    $db_password = '1234';

    $db_server = new mysqli($db_hostname,  $db_username, $db_password, $db_database, 3306);

    $insert = "INSERT INTO chat (
        USER_ID, P_W, HEAD) VALUES (
            '$r_id','$r_pw','$r_r_pw')";
    $result = mysqli_query($db_server, $insert);
    if($result == false){
        echo mysql_error($db_server);
    }
?>