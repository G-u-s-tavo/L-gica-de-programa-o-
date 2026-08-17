<?php
$num=1;
$num2=4;
$num3= 3;
if ($num < $num2 < $num3) {
    echo "$num\n";
}
if ($num2 < $num3 < $num) {
    echo "$num2\n";
}
if ($num3 < $num2 < $num) {
    echo "$num3\n";
}
if ($num2 < $num < $num3){
    echo "$num2\n";
}
?>