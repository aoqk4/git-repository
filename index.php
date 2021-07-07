<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th width="100">SITE_ID</th>
					<th width="100">USER_ID</th>
					<th width="100">USER_PW</th>
                    <th width="100">USER_EMAIL</th>
					<th width="100">USER_NAME</th>
                    <th width="100">USER_BRITH</th>
                    <th width="100">YEAR</th>
                </tr>
            </thead>
    </body>
<?php

    $db_hostname = '127.0.0.1';
    $db_database = 'test1';
    $db_username = 'ljs2';
    $db_password = '1234';

    $db_server = new mysqli($db_hostname,  $db_username, $db_password, $db_database, 3306);
    if (!$db_server)
        echo "DB server connect Error<br>";
    else
        echo "DB server connect<br>";

    $select = "SELECT * FROM sign_up2";
    $result = mysqli_query($db_server, $select);
    while($board = $result->fetch_array())
    {
        $SITE_ID = $board['SITE_ID'];
        $USER_ID = $board['USER_ID'];
        $USER_PW = $board['USER_PW'];
        $USER_EMAIL = $board['USER_EMAIL'];
        $USER_NAME = $board['USER_NAME'];
        $USER_BRITH = $board['USER_BRITH'];
        $USER_YEAR = $board['year'];
        echo <<<END
        <tbody>
        <tr>
            <td width="100">$SITE_ID</td>
            <td width="100">$USER_ID</td>
            <td width="100">$USER_PW</td>
            <td width="100">$USER_EMAIL</td>
            <td width="100">$USER_NAME</td>
            <td width="100">$USER_BRITH</td>
            <td width="100">$USER_YEAR</td>
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