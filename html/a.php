<?php $str="Hello";  $test="lo";  echo substr_compare($str, $test, -strlen($test), strlen($test)) === 0;  ?>
