<?php

$database = new Database();
$nik = $_GET["nik"];

if (isset($_POST['submit'])) {
    $data = [
        'nama' => $_POST['nama'],
        'agama' => $_POST['agama'],
        'pekerjaan' => $_POST['pekerjaan']
    ];
    $database->update("tb_penduduk", $data, "nik=" . $nik);
    header("location: home");
}

$data = $database->get("tb_penduduk", "where nik=" . $nik);

$form = new Form("", "submit");
$form->addField("nama", "Nama", $data["nama"]);
$form->addField("agama", "Agama", $data["agama"]);
$form->addField("pekerjaan", "Pekerjaan", $data["pekerjaan"]);
$form->displayForm();
