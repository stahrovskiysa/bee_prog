<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="/css/style1.css"/>
    <title>Натуральный мед в Брянске</title>

</head>





<body>


<form>

    <h1>Цены на нашу продукцию</h1>
    <br>

    <?php
    $table = '<table  border="1">';


    $table .= '<tr><th >Наименование продукции</th><th>Размерность</th><th>Цена (руб)</th><th>Примечание</th> 
<th> Фото</th> </tr>';


    foreach ($price as $item)

    {

        $table .= '<tr>';
        $table .=  '<td class="col2">'.$item['nameprod'].'</td>';
        $table .=  '<td class="col3">'.$item['dimension'].'</td>';
        $table .=  '<td class="col3">'.$item['price'].'</td>';
        $table .=  '<td class="col2">'.$item['notepr'].'</td>';
        $table .=  '<td>'. '<img src="'.'/filemed/'.$item['urlmed'].'" width="150px" height="auto" alt="нет рисунка"></td>';



        $table .= "</tr>";

    }

    $table .= '</table> ';
    echo $table;


    ?>



    <br><br>

    <a href="/price/price.zip" class="button14">Скачать прайс</a>




    <h4><a href="/blog" class="button"><<Назад</a></h4>




</form>


</body>
</html>



