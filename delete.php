<?php

$database = new Database();
$nik = $_GET["nik"];
echo $nik;

if (isset($_GET["nim"])) {
    $database->delete("tb_penduduk", "where nik=" . $nik);
    header("Location: home");
}
