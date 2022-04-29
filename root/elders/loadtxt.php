<?php 
$delete = @$_GET['delete']; 
$textFile = file("users.txt"); 
$lines = count($textFile); 

if($delete != "" && $delete >! $lines || $delete === '0') { 
    $textFile[$delete] = ""; 
    $fileUpdate = fopen("users.txt", "wb"); 
    for($a=0; $a<$lines; $a++) { 
           fwrite($fileUpdate, $textFile[$a]); 
    } 
    fclose($fileUpdate); 
   header("Location:index.php"); 
   exit; 
} 

foreach($textFile as $key => $val) { 
$line = @$line ."<div class='newsbox'>". $val . "</div>
<div class='closing'><a href =loadtxt.php?delete=$key>&times;</a></div>
<div class='clear'> </div>
"; 
} 
echo $line; 
?>