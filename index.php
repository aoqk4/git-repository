<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th width="100">PIN</th>
					<th width="100">CODE</th>
					<th width="100">PW</th>
                    <th width="100">EMAIL</th>
                </tr>
            </thead>
    </body>
<?php

    $db_hostname = '127.0.0.1';
    $db_database = 'test1';
    $db_username = 'ljs2';
    $db_password = '1234';

    $db_server = new mysqli($db_hostname,  $db_username, $db_password, $db_database, 3306);

    $select = "SELECT * FROM sign_up4";
    $result = mysqli_query($db_server, $select);
    while($board = $result->fetch_array())
    {
        $PIN = $board['PIN'];
        $CODE = $board['CODE'];
        $PW = $board['PW'];
        $EMAIL = $board['EMAIL'];
        echo <<<END
        <tbody>
        <tr>
            <td width="100">$PIN</td>
            <td width="100">$CODE</td>
            <td width="100">$PW</td>
            <td width="100">$EMAIL</td>
        </tr>
        </tbody>
END;
    }

    // $insert = "INSERT INTO chat (
    //     USER_ID, P_W, HEAD) VALUES (
    //         'id_test1','12345','글234')";
    // $result = mysqli_query($db_server, $insert);
    // if($result == false){    
    //     echo mysql_error($db_server);
    // } 
?>