<?PHP 		
$directory="../messages"; 
$sortOrder="newestFirst"; 

$results = array(); 
$handler = opendir($directory); 

$action = 0;
$delete = $_GET['delete'];
$full  = "../messages/";
$action = $_GET['action'];
if ($action == 1) {

$end = $full . $delete;

unlink($end);
header("Location: files.php");
exit;
}


while ($file = readdir($handler)) {  
	if ($file != '.' && $file != '..' && $file != ".htaccess" && $file != "index.php" && $file != "error_log"){ 
		$currentModified = filectime($directory."/".$file); 
		$file_names[] = $file; 
		$file_dates[] = $currentModified; 
	}    
} 
	closedir($handler); 

//Sort the date array by preferred order 
if ($sortOrder == "newestFirst"){ 
	arsort($file_dates); 
}else{ 
	asort($file_dates); 
} 
	
//Match file_names array to file_dates array 
$file_names_Array = array_keys($file_dates); 
foreach ($file_names_Array as $idx => $name) $name=$file_names[$name]; 
$file_dates = array_merge($file_dates); 
	
$i = 0; 

//Loop through dates array and then echo the list 
foreach ($file_dates as $$file_dates){ 
	$date = $file_dates; 
	$j = $file_names_Array[$i]; 
	$file = $file_names[$j]; 
	$i++; 
	
	echo		'<span class="left">'.$file.'</span><span class="right"><a href="chfiles.php?delete='.$file.'&action=1" onclick="return confirm(\'Are you sure to delete the file?\n'.$file.'\')">&times;</a></span><br />
							
	';
}


?>