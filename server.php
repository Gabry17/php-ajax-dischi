<?php include __DIR__  . "/database.php";
$data = json_encode($database);
header("Content-type: application/json");
echo $data;
?>
