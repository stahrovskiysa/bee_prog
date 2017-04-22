<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Изменение записи в таблице пользователей</title>
</head>

<?php
foreach ($query as $row)
{
    $iduser = $row->iduser;
    $family = $row->family;
    $name = $row->name;
    $soname = $row->soname;
    $textusers = $row->textusers;

}
$url_st= base_url()."admin/update_users1/";
?>
    <form action=<?php echo $url_st.$iduser."/"; ?> method="POST" >

<body>



    <label> iduser:  <?php echo $iduser ?> </label>



    <br> </br>
    <label> Фамилия:   </label>
    <input type="text" name="family" value="<?php echo html_escape($family); ?>" size="40"> <br />

    <br> </br>
    <label> Имя: </label>
    <input type="text" name="name" value="<?php echo html_escape($name); ?>" size="40"> <br />
    <br> </br>
    <label> Отчество: </label>
    <input type="text" name="soname" value="<?php echo html_escape($soname); ?>" size="40"> <br />
    <br> </br>

    <label> Примечание: </label>
    <input type="text" name="textusers" value="<?php echo html_escape($textusers); ?>" size="60"> <br />
    <br> </br>

    <input type="submit" value="Изменить">


</form>



</body>
</html>