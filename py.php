<?php
$var1="S1.pdf";
$var3="S2.pdf";
//$command = escapeshellcmd('/usr/custom/p.py $var1 $var2');
$my=shell_exec("python p.py $var1 $var3");
echo $my;
?>
