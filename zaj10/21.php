
<?php
$dsn = '';
$user = '';
$password ='';
$db = new PDO($dsb, $user, $password);
$sql = 'SELECT nazwa, wiek FROM zwierzeta-domowe';
foreach ($db->query($sql) as $row) {
    print $row['nazwa'] . "\t";
    print $row['wiek'] . "\n";

}
?>

