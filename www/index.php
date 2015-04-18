<?php

include "includes/config.php";

if(isset($_POST['sub']) && $_POST['sub'] == 1) {

    $log = isset($_POST['login']) ? $_POST['login'] : '';
    $pass = isset($_POST['password']) ? $_POST['password'] : '';
    $query = "INSERT into `users` (login, password) VALUES ('".$log."','".$pass."') ";
    $res = mysqli_query($db, $query);
}

?>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet">
        <title>Вход</title>
    </head>
    <body>
        <table align="center" border="3" bgcolor="#1e90ff">
        <caption>Введите ваши данные:</caption>
        <tr>
            <td>
                <form method="post" action="index.php">
                    <input type="hidden" name="sub" value="1">
                    <p>Login:</p>
                    <p><input type="text" name="login"></p>
                    <p>Password:</p>
                    <p><input type="password" name="password"></p>
                    <p><input type="submit" value="Вход" align="center"></p>
                </form>
            </td>
        </tr>
        </table>
    </body>
    <?php
    var_dump($_POST);
    ?>
</html>