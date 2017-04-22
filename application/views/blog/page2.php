
</html><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form>

    <h1>Таблица информация</h1>
    <?php
    $table = '<table border="1" cellpadding="2" cellspacing="1">';
    $table .= '<tr><th>iduser</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Примечание</th></tr>';


    foreach ($query as $row)

    {

        $table .= '<tr>';
        $table .=  '<td>'.$row->iduser.'</td>';
        $table .=  '<td>'.$row->family.'</td>';
        $table .=  '<td>'.$row->name.'</td>';
        $table .=  '<td>'.$row->soname.'</td>';
        $table .=  '<td>'.$row->textusers.'</td>';


        $table .= "</tr>";

    }

    $table .= '</table> ';
    echo $table;




    ?>



    <h4><a href="/blog">Назад</a></h4>

</body>
</form>