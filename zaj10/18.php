
<?php
	$fp = fopen("plik.txt", "w");
	fputs($fp, $_POST['tekst']);
	fclose($fp);
?>
