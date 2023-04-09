<?php

$database = new Database();
if (isset($_POST['submit'])) {
    $data = [
        'nik' => $_POST['nik'],
        'nama' => $_POST['nama'],
        'agama' => $_POST['agama'],
        'pekerjaan' => $_POST['pekerjaan']
    ];
    $database->insert("tb_penduduk", $data);
}

$form = new Form("", "submit");
$form->addField("nik", "Nik");
$form->addField("nama", "Nama");
$form->addField("agama", "Agama");
$form->addField("pekerjaan", "Pekerjaan");
$form->displayForm();
