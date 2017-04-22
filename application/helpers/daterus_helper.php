<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// фунцция с прописью при первом режиме   dd месяц  ГГГГ
// при режиме 2     формат  dd.mm.yyyy
if ( ! function_exists('mysql_russian_date'))
{
    function mysql_russian_date($datestr = '', $regim)
    {
        if ($datestr == '')
            return '';

        // получаем значение даты и времени
        list($day) = explode(' ', $datestr);

        switch( $day )
        {
            // Если дата совпадает с сегодняшней
            case date('Y-m-d'):
                $result = 'Сегодня';
                break;

            //Если дата совпадает со вчерашней
            case date( 'Y-m-d', mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")) ):
                $result = 'Вчера';
                break;

            default:
            {
                // Разделяем отображение даты на составляющие
                list($y, $m, $d)  = explode('-', $day);

                $month_str = array(
                    'января', 'февраля', 'марта',
                    'апреля', 'мая', 'июня',
                    'июля', 'августа', 'сентября',
                    'октября', 'ноября', 'декабря'
                );
                $month_int = array(
                    '01', '02', '03',
                    '04', '05', '06',
                    '07', '08', '09',
                    '10', '11', '12'
                );

                if ($regim === 2 ) {
                    // Замена числового обозначения месяца на словесное (склоненное в падеже)
                    $m = str_replace($month_int, $month_str, $m);
                    $result = $d.' '.$m.' '.$y;

                }

              if ($regim === 1) {
                  // Формирование окончательного результата
                  $result = $d . '.' . $m . '.' . $y;
              }
            }
        }
        return $result;


    }
}


// ------------------------------------------------------------------------

if ( ! function_exists('mysql_russian_datetime')) {
    function mysql_russian_datetime($datestr = '')
    {
        if ($datestr == '')
            return '';

        // Разбиение строки в 3 части - date, time and AM/PM
        $dt_elements = explode(' ', $datestr);

        // Разбиение даты
        $date_elements = explode('-', $dt_elements[0]);

        // Разбиение времени
        $time_elements = explode(':', $dt_elements[1]);

        // вывод результата
        $result1 = mktime($time_elements[0], $time_elements[1], $time_elements[2], $date_elements[1], $date_elements[2], $date_elements[0]);

        $monthes =
            array(' ', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
        $days =
            array(' ', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье');
        $day = date("j", $result1);
        $month = $monthes[date("n", $result1)];
        $year = date("Y", $result1);
        $hour = date("G", $result1);
        $minute = date("i", $result1);
        $dayofweek = $days[date("N", $result1)];
        $result = $day . ' ' . $month . ' ' . $year . ' в ' . $hour . ':' . $minute;


        return $result;


    }
}