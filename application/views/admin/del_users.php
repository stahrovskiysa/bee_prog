<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Удаление записи в таблице пользователей</title>
</head>
<body>
<?php
$url_st= base_url()."admin/del_users1/$iduser/";
?>


<form action=<?php echo $url_st; ?> method="get">
<h2>    <label> Удалить запись с номером :   <?php echo $iduser;?> </label> </h2>

    <input type="submit" name = "delete"  value = "Удалить" />
    <input type="button" value="Отменить" onClick='location.href="<?php echo base_url()."admin/page_users" ?>"'>


</form>



</body>
</html>

