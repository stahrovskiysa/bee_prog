<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="/css/reset.css"/>
    <link type="text/css" rel="stylesheet" href="/css/style.css"/>




    <title>Натуральный мед в Брянске</title>




</head>


<body>

<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>


<?php

foreach ($configure as $item)
{
    if ($item->nameconfig === 'runstr' ) {
        $strmaruee = $item->textparametr;

    }
    if ($item->nameconfig === 'aboutinfo' ) {
        $strabout = $item->textparametr;

    }


}
?>




<header>




    <div id="logo">
    <a href="#"> <img src="/img/pchela.png" alt="Логотип"> </a>
    </div>
    <div id="namesite">
     <h1> Сайт производителей натурального меда в Брянске</h1>
    </div>

    <div id="baner">
        <a href="#"> <img src="/img/baner1.png" alt="Банер"> </a>
    </div>
       <div class="clear"></div>





</header>

    <div class="menu">
    <ul>
        <li><a href="/blog/about_info">О нас</a></li>
        <li>
            <a href="#">Статьи</a>
            <ul>
                <li><a href="/blog/view_content_inf">О меде и пчелах</a></li>
                <li><a href="/blog/view_content_pchelovod">О пчеловодстве</a></li>
                <li>
                    <a href="#">Статьи3</a>
                    <ul>
                        <li><a href="#">Вступление</a></li>
                        <li><a href="#">Начальный</a></li>
                        <li><a href="#">Продвинутый</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Видео</a>
            <ul>
                <li><a href="#">Видео1</a></li>
                <li><a href="#">Видео2</a></li>
                <li><a href="#">Видео3</a></li>

            </ul>
        </li>
        <li>
            <a href="#">Форум</a>
        </li>
        <li>
            <a href="/blog/view_price">Наши цены</a>
        </li>

    </ul>

       </div>




<div class="block_content">


    <div class="block1">



        <h2><a href="/blog/view_price">Наши цены</a></h2>
        <br>
        <h2><a href="/blog/view_content_pchelovod">Статьи о пчеловодстве</a></h2>
        <br>
        <h2><a href="/blog/view_content_inf">Статьи о меде и пчелах</a></h2>
        <br>
        <h2><a href="#">Форум</a></h2>
        <br>
        <h2><a href="#">Видео</a></h2>
        <br>

        <hr />




    <h2><b>Отзывы о нашей продукции</b></h2>
    <br>


    <a href="/blog/add_comment" class="button"> Оставить отзыв</a>
    <br>

        <a href="/blog/view_comment" class="button">Посмотреть все отзывы</a>
        <hr />



        <marquee direction="left"  height="25px"  scrollamount="3" vspace="5px"  hspace="5px"
                 bgcolor="#ffcc00"> <?php echo $strmaruee; ?>

        </marquee>




    </div>

    <div class="block_about">
        <h2><b> О нашей пасеке </b></h2>
        <br>
        <p>
           <?php echo $strabout  ?>

        </p>

    </div>

    <div class="block_info">
        <h2><b>Полезная информация </b></h2>
        <br>

        <p> <img src="/img/med.jpg" width="25%" height="25%" alt="натуральный мед" class="leftimg">
            Натуральный мёд, как правило, имеет сладкий вкус.
            Резкий кисловатый привкус присущ только испорченному, забродившему мёду.
            Аромат (запах) мёда обусловливается особенностями того или иного растения.
            Мёд, собранный пчёлами с одного определённого растения, имеет обычно свой характерный вкус и аромат.
            При известном опыте можно, например, безошибочно определить гречишный мёд.
            Своеобразный аромат имеет мёд липовый, бодяковый, собранный с цветков подсолнечника.
            Аромат смешанного мёда отличается чрезвычайным разнообразием и часто не
            даёт возможности определить его происхождение.
          </p>
        <br>
        <h3><a href="/blog/view_content_inf">Статьи о меде и пчелах</a></h3>

    </div>






    <div class="clear"></div>

</div>

<footer>
    <div class="namefooter">
       <h4> <p>&copy; 2017, Sergey Stahrovskiy. По всем вопросам пишите нам по адресу
                      </p> </h4>
    </div>

    <div class="emailn">
    <img src="/img/emailn.png" alt="здесь email">
        <div>

</footer>

</form>



</body>
</html>