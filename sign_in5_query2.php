<?php
    $r_PIN = $_POST['pin'];
    $r_PW = $_POST['pw'];
    echo "로그인 성공 <br>";
    echo "<br>";
    echo "$r_PIN <br>";
    
    $db_hostname = '127.0.0.1';
    $db_database = 'test1';
    $db_username = 'ljs';
    $db_password = '1234';

    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);

    $select = "SELECT PIN FROM sign_up4 WHERE PW=hex(aes_encrypt('$r_PW','a')) AND PIN='$r_PIN'";
    $result = mysqli_query($db_server, $select);
    if($result == false){
        echo mysql_error($db_server);
    }
    // else{
    //     header( 'Location: /content/sign_in5.php' );
    // }
?>