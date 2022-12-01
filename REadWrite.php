<?php 
$myfile = fopen("newFile.txt","w") or die("Unable to open file!");
$txt = "Hi I am Mudit Sachin Potdar from B3 batch & currently pursuing MCA from MPSTME\n";
fwrite($myfile,$txt);
fclose($myfile);
?>