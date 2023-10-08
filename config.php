<?php
require_once "ultils.php";

define("DB_SEVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
$dbname = "sealife";

$conn = new mysqli(DB_SEVER,DB_USERNAME,DB_PASSWORD,$dbname);
if (!$conn) {
    die(mysqli_error($conn));
}
?>

