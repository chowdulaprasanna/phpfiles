<?php
$fp=fopen('text.php','r');
$f=fread($fp,filesize('text.php'));
$fp2=fopen('copy.php','w');
$vowels=array('a','e','i','o','u','A','E','I','O','U');
$adjacents=array('b','f','j','p','v','B','F','J','P','V');
$copy=str_replace($vowels,$adjacents,$f);
fwrite($fp2,$copy);
echo $copy;
?>


            