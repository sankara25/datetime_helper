<?php

/*
File Name : datatime_helper
Author    : ssankara
Email     : sankaranec@gmail.com
*/

/*
convert_date function formats list given below
d1 - d-m-Y (eg. 01-04-2023)
d2 - d-m-Y (eg. 01-04-2023 MON)
d3 - ds-M-Y (eg. 1st Apr,2023)
m1 - m-d-Y (eg. 04-01-2023)
m2 - M-d-Y (eg. APR-01-2023)
m3 - F Y d (eg. April 2023 01)
y1 - Y-m-d (eg. 2023-04-01)
y2 - y-m-d (eg. 23-04-01)
y3 - Y M d (eg. 2023 Apr 01)
*/
if ( ! function_exists('convert_date'))
{
    function convert_date($format = NULL, $date = NULL)
	{
        if(!isset($date))
        {
            $date = DATE("Y-m-d");
        }

        if($date == '0000-00-00')
        {
            $date = 'Invalid Format date';
        }
        else
        {
            if(isset($format))
            {
                if($format == 'd1')
                {
                    $retrun_date = DATE('d-m-Y', strtotime($date));
                }
                elseif($format == 'd2')
                {
                    $retrun_date = DATE('d-m-Y D', strtotime($date));
                }
                elseif($format == 'd3')
                {
                    $retrun_date = DATE('dS M, Y', strtotime($date));
                }
                elseif($format == 'm1')
                {
                    $retrun_date = DATE('m-d-Y', strtotime($date));
                }
                elseif($format == 'm2')
                {
                    $retrun_date = DATE('M-d-Y', strtotime($date));
                }
                elseif($format == 'm3')
                {
                    $retrun_date = DATE('F Y d', strtotime($date));
                }
                elseif($format == 'y1')
                {
                    $retrun_date = DATE('Y-m-d', strtotime($date));
                }
                elseif($format == 'y2')
                {
                    $retrun_date = DATE('y-m-d', strtotime($date));
                }
                elseif($format == 'y3')
                {
                    $retrun_date = DATE('Y M d', strtotime($date));
                }
                return $retrun_date;
            }
            else
            {
               return $date;
            }
        }
    }

}



?>