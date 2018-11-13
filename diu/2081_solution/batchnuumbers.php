<?php

include 'dbconnect.php';

if (isset($_POST["medicine"]) && !empty($_POST["medicine"])) {


    $stmt    = $driver->prepare("SELECT batch_no FROM stock where id = ? ");
    $stmt->execute([$_POST['id']]);
    $results = $stmt->Fetchcolumn();

    echo $results['batch_no'];

}
?>