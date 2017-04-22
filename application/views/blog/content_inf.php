<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="/css/style1.css"/>
    <title>Натуральный мед в Брянске</title>

</head>





<body>


<form>

    <h1>Полезная информация о меде (статьи)</h1>
    <br>



    <div class="contentn">


        <?php
        foreach ($comment as $item)
        {

            echo '<div class="block_about">';
            echo "<b>Дата:  &nbsp;&nbsp; </b>".mysql_russian_date($item['date'],1)."&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<b> Имя пользователя: &nbsp;&nbsp; </b>".$item['login'];
            echo "<hr>";
            echo "<b> Отзыв:  &nbsp;&nbsp; </b> <p>".$item['message']."</p>";
            echo "</div>";
        }

        ?>


    </div>



    <h4><a href="/blog" class="button"><<Назад</a></h4>


</form>


</body>
</html>