<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>




    <h1>Программа для администриования сайта по меду</h1>

    <?php
    $url_st= base_url()."admin/adm_users/";

    ?>

    <form action=<?php echo $url_st; ?> method="POST">



    Имя пользователя: <input type="text" name="user" /><br />
        <br />
    Пароль: <input type="password" name="pass" /><br />
        <br />
    <input type="submit" name="submit" value="Войти" />



</form>




</body>
</html>