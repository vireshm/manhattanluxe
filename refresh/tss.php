<!DOCTYPE html>
<html>

<head>
<meta http-equiv="refresh" content="30">
</head>

<body>
<h1>My Website</h1>
<p>Some text...ccccccccccccccccc</p>
</body>

</html>
<?php 

//echo(date_default_timezone_set("UTC") . "<br />");
//echo(date("Y-d-m H:i:s " ) . "<br />");


$timezone  = +10; //(GMT -5:00) EST (U.S. & Canada) 
//echo $timezone+date("I");


//echo gmdate("Y/m/j H:i:s", time() + 3600*($timezone+date("I")) - 1); 



date_default_timezone_set('Pacific/Guam');

    echo $current_date=date("Y-m-d H:i:s");

?>

