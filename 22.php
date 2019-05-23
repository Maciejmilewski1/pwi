<?php
    $pdo = new PDO('mysql:host=localhost;dbname=alkohole','root','');
    if (isset($_GET['id'])) {
    $stm = $pdo->prepare('SELECT typ, nazwa, pojemnosc 
    FROM alkohole 
    WHERE id = ?');
    $bind = $stm->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $stm->execute();
    $i = 0;
    $pom = 0;
        while($row = $stm->fetch())
        {
                print $row['typ'].': '.$row['nazwa'].': '.$row['pojemnosc'].'</li>';
                $i=1;
        }
        if($i == 0) {
            echo "nie ma takieog id!!!";
        }
    }
    else {
        echo "podaj id!!!";
    }
?>
