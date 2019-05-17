
<?php
$dbh = new PDO('odbc:sample', 'db2inst1', 'ibmdb2');

$count = $dbh->exec("UPDATE FROM zwierzeta_domowe SET='reksio' where nazwa=3 ");


print("Deleted $count rows.\n");
?>

