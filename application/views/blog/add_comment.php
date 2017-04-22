<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <link type="text/css" rel="stylesheet" href="/css/style_form.css"/>


    <title>Натуральный мед в Брянске</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {

            $("#datepicker").datepicker({
                inline: true,
                changeYear: true,
                changeMonth: true
            });

            jQuery(function ($) {
                $.datepicker.regional['ru'] = {
                    closeText: 'Закрыть',
                    prevText: '&#x3c;Пред',
                    nextText: 'След&#x3e;',
                    currentText: 'Сегодня',
                    monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                        'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                    monthNamesShort: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                        'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                    dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
                    dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
                    dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                    weekHeader: 'Нед',
                    dateFormat: 'dd.mm.yy',
                    firstDay: 1,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: ''
                };
                $.datepicker.setDefaults($.datepicker.regional['ru']);
            });

            $.datepicker.regional['ru']


        });
    </script>




</head>






<body>
<!-- n -->
<?php $url_st= base_url()."blog/add_comment1/"; ?>

<!--  ?php echo validation_errors(); ?  -->

<!-- echo form_open($url_st) -->
<div class="forminput">




<?php echo form_open(); ?>

<h3> Оставить отзыв о продукции</h3>

    <hr />


    <table border="0" width="100%" cellspacing="5" cellpadding="0" >
<tr>
        <td class="tb1">
  <span class="label">
    <?php $today = date("d.m.Y"); echo "Текушая дата: ".$today; ?>
     <label> &nbsp;&nbsp;Дата: </label>
  </span>


        </td>
    <td>


        <input type="text" name="date" id="datepicker">

     <!--   <input type="text" name="date" value="dd.mm.yyyy">  -->


      <!-- <input type="date" name="date" "<?php echo set_value('date'); ?>  size="10">  -->


        <span class="colortext">   <?php echo form_error('date'); ?> </span>

    </td>
</tr>

    <tr>
      <td class="tb1">
          <span class="label">
    <label>  Имя пользователя (как к вам обращаться): </label>
          </span>
      </td>
      <td>

        <input type="text" name="login" value="<?php echo set_value('login'); ?>" size="60">
        <span class="colortext">  <?php echo form_error('login'); ?> </span>

      </td>
    </tr>

   <tr>
       <td class="tb1">
             <span class="label">
    <label>  Текст отзыва: </label>
             </span>
       </td>
        <td>

            <textarea name="message" rows="7" cols="70"> <?php echo set_value('message'); ?></textarea>
            <span class="colortext"><?php echo form_error('message'); ?> </span>

        </td>

   </tr>

    <tr>
       <td class="tb1">
             <span class="label">
        <label> Ваш email для обратной связи: </label>
             </span>
       </td>
       <td>

        <input type="text" name="email_comment" value="<?php echo set_value('email_comment'); ?>" size="40">
        <span class="colortext">    <?php echo form_error('email_comment'); ?> </span>

       </td>
    <tr>

        <tr>
    <td>
        <br>
    <div> <input class="formbutton" type="submit" name = "add"  value = "Добавить">
    </td>
    <td>
     <input class="formbutton" type="button" value="Отменить" onClick='location.href="<?php echo base_url()."blog/" ?>"'> </div>
    </td>
        </tr>

<tr><td> <br> *  -  все поля данной формы обязательны к заполнению </td></tr>


    </table>




</form>



</div>






</body>
</html>
