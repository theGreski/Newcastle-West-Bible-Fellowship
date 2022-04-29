<?php
echo '
<table border=0 cellspacing=2>
	<tr>
		<th>Location</th><th>Visited</th><th>Houses</th>
	</tr>';
$fp = fopen('gospel.txt','r');
while (!feof($fp)) {

$line = fgets($fp, 1024); //use 2048 if very long lines
$field = explode ('|', $line);

echo '
<tr>
<td>'.$field[1].'</td>
<td>'.$field[0].'</td>
<td align="right" style="text-align: right; padding-right: 4px;">'.$field[3].'</td>
</tr>';
}
fclose($fp);
echo '</table>';
?>