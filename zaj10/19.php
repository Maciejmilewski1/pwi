<pre>
<?php
	$fp = fopen("plik2.txt", "r");
	$dane = fread($fp, filesize("plik2.txt"));
	fclose($fp);
	echo $dane
?>
</pre>
