<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="/css/style1.css"/>
    <title>Натуральный мед в Брянске</title>

</head>





<body>


<form>

    <h1>Полезная информация о меде и пчелах (статьи)</h1>
    <br>



    <div class="contentn">


        <?php
        foreach ($contentinf as $item)
        {

            echo '<div class="block_about">';


            echo "<b>Дата:  &nbsp;&nbsp; </b>".mysql_russian_date($item->datacont,1)."&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<b> О меде: &nbsp;&nbsp; </b>".$item->info;
            echo "<hr>";
            echo '"<img class="leftimg"  src="'.$item->urlimg.'" width="250px" height="auto" alt="нет рисунка"></td>';


            echo "<b>Статья:  &nbsp;&nbsp; </b> <p>".$item->textinf."</p>";

           if ($item->urlarticle !== '') {

               echo "<hr>";

               echo "<a href=". $item->urlarticle."> Почитать всю статью </a>";

           }
            echo "</div>";
        }

        ?>


    </div>



    <h4><a href="/blog" class="button"><<Назад</a></h4>


</form>


</body>
