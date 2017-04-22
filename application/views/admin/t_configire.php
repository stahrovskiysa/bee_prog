<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form>

    <h1>Таблица пользователей</h1>
    <?php
    $table = '<table border="1" cellpadding="2" cellspacing="1">';
    $table .= '<tr><th>iduser</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Примечание</th><th>Изменить</th><th>Удалить</th></tr>';


    foreach ($query as $row)

    {

        $table .= '<tr>';
        $table .=  '<td>'.$row->idconfig.'</td>';
        $table .=  '<td>'.$row->nameconfig.'</td>';
        $table .=  '<td>'.$row->parametern.'</td>';
        $table .=  '<td>'.$row->parametrstr.'</td>';
        $table .=  '<td>'.$row->textparametr.'</td>';
        $table .=  '<td> <a href ='.base_url().'admin/update_users/'.$row->idconfig.'/> Изменить </a></dt>';
        $table .=  '<td> <a href ='.base_url().'admin/del_users/'.$row->idconfig.'/> Удалить </a></dt>';


        $table .= "</tr>";

    }

    $table .= '</table> ';
    echo $table;








    ?>



    <h4><a href="/admin">Назад</a></h4>

</body>
</form>
</html>