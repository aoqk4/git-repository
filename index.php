<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th width="100">USER_ID</th>
					<th width="100">CHAT_ID</th>
					<th width="100">P_W</th>
					<th width="100">HEAD</th>
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

    $select = "SELECT * FROM chat";
    $result = mysqli_query($db_server, $select);
    while($board = $result->fetch_array())
    {
        $USER_ID = $board['USER_ID'];
        $CHAT_ID = $board['CHAT_ID'];
        $P_W = $board['P_W'];
        $HEAD = $board['HEAD'];
        echo <<<END
        <tbody>
        <tr>
            <td width="100">$USER_ID</td>
            <td width="100">$CHAT_ID</td>
            <td width="100">$P_W</td>
            <td width="100">$HEAD</td>
        </tr>
        </tbody>
END;
    }
?>
