<?php
/*
Uploadify v2.1.4
Release Date: November 8, 2010

Copyright (c) 2010 Ronnie Garcia, Travis Nickels

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

$directory = "../../media";
$handler = opendir($directory);
while ($file = readdir($handler)) {
	if ($file != '.' && $file != '..' && $file != ".htaccess") {
		$file_part = explode('_',$file);
		$file_numbers[] = intval($file_part[0]);
	}
}
closedir($handler);
$next_number = max($file_numbers) + 1;

if (!empty($_FILES)) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = '../../media/';
	$targetFile =  $targetPath . $next_number . "_" . $_FILES['Filedata']['name'];
	$targetFile = str_replace("  ", " ", $targetFile);
	$targetFile = str_replace("  ", " ", $targetFile);
	$targetFile = str_replace("  ", " ", $targetFile);
	$targetFile = str_replace(" ", "_", $targetFile);
	
	$allowed =  array('mp3','MP3','pdf','PDF');
	$filename = $_FILES['Filedata']['name'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	if(in_array($ext,$allowed) ) {
		move_uploaded_file($tempFile,$targetFile);
		echo str_replace($_SERVER['DOCUMENT_ROOT'],'',$targetFile);
	} else {
		echo "error";
	}
	
}
?>
