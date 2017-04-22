<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
  <title>Добавление записи в таблицу пользователей</title>
</head>
<body>
<?php
$url_st= base_url()."admin/add_users1/";
?>
<form action=<?php echo $url_st; ?> method="POST">

<label> Фамилия:   </label>
    <input type="text" name="family" value="" size="40"> <br />

    <br> </br>
 <label> Имя: </label>
    <input type="text" name="name" value="" size="40"> <br />
    <br> </br>
<label> Отчество: </label>
    <input type="text" name="soname" value="" size="40"> <br />
    <br> </br>

    <label> Примечание: </label>
    <input type="text" name="textusers" value="" size="60"> <br />
    <br> </br>


<input type="submit" name = "add"  value = "Добавить" />

</form>
</body>
</html>
