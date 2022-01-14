<?php

// Premiere ligne
$firstDate = date("D M J Y");
echo $firstDate;

echo "<br><br>";

//deuxiéme ligne
$secondDate = strtotime("2018.12.10");
echo date('Y.m.d', $secondDate);

echo "<br><br>";

//troisiéme ligne
$thirdDate = strtotime("11:35:07");
echo date('H:i:s', $thirdDate);



