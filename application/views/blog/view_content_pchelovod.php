<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="/css/style1.css"/>
    <title>Натуральный мед в Брянске</title>

</head>





<body>


<form>

    <h1>Полезная информация о пчеловодстве и пчеловодах (статьи)</h1>
    <br>



    <div class="contentn">


        <?php
        foreach ($contentinf as $item)
        {

            echo '<div class="block_about">';


            echo "<b>Дата:  &nbsp;&nbsp; </b>".mysql_russian_date($item->datacontp,1)."&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<b> Статья: &nbsp;&nbsp; </b>".$item->infop;
            echo "<hr>";
            echo '"<img class="leftimg"  src="/content_img/'.$item->urlimgp.'" width="250px" height="auto" alt="нет рисунка"></td>';




            echo "<b>Статья:  &nbsp;&nbsp; </b> <p>".$item->textinfp."</p>";

            if ($item->urlarticlep !== '') {

                echo "<hr>";

                echo "<a href=". $item->urlarticlep."> Почитать всю статью </a>";

            }
            echo "</div>";
        }

        ?>


    </div>



    <h4><a href="/blog" class="button"><<Назад</a></h4>


</form>


</body>
