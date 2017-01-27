<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'demo');
$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


$search_word=$_GET['q'];
$sql = mysqli_query($connection,"Select no form login where name LIKE '%$search_word%'");
$record_count=mysqli_num_rows($sql);
//Display count.........
echo $record_count;
?>
