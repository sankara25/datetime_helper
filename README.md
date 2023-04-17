# datetime_helper

DESCRIPTION 
https://github.com/sankara25/datetime_helper

datetime_helper function creates three types of function included to convert date, time, and datetime. then calculate the two dates in between dates, seconds are returned in this function. is create for PHP Codeigniter frameworks and also core PHP files include to call this function to work fine

Codeigniter Projects
download the datetime_helper file
and stored to helpers folders
autoload to the datetime_helper file in helper array
then using condition to print ur human readable date formats

for exmaple
$this->load->helper('datetime_helper');
echo convert_date('m1', $date);

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
