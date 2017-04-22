<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <?php
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>

        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>

    <style type='text/css'>
        body
        {
            font-family: Arial;
            font-size: 14px;
        }
        a {
            color: blue;
            text-decoration: none;
            font-size: 14px;
        }
        a:hover
        {
            text-decoration: underline;
        }
    </style>


</head>
<body>


<h2>Контент (Статьи о меде и пчелах)</h2>

<h4><a href="/admin/">Назад</a></h4>


<div>
    <?php
    print_r($output);
    die();
    ?>

</div>



</body>

</html>