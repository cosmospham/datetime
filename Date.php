<?php 
/**
*  .
*/
class My_Date
{
    public static function monthDiff($from, $to)
    {
        if (strtotime($from.'-01') > strtotime($to.'-01')) {
            $date1 = new DateTime($from);
            $date2 = new DateTime($to);
        } elseif (strtotime($from.'-01') < strtotime($to.'-01')) {
            $date1 = new DateTime($to);
            $date2 = new DateTime($from);
        } else {
            return 1;
        }

        $year_diff = $date1->format('y') - $date2->format('y');
        $month_diff = $date1->format('m') - $date2->format('m');
        $diff = $year_diff * 12 + $month_diff + 1;

        return $diff;
    }
}
