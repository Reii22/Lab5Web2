<?php

require_once("Database.php");
require_once("header.php");
require_once("Form.php");

class Main
{
    private $warga = [];
    public function __construct($human)
    {
        $this->warga = $human;
    }
    public function x($link)
    {
        if (array_key_exists($link, $this->warga)) {
            require($this->warga[$link]);
        } else {
            require($this->warga["home"]);
        }
    }
}

$qt = [
    "home" => "home.php",
    "add" => "add.php",
    "update" => "update.php",
    "delete" => "delete.php"
];
$main = new Main($qt);
$main->x(@$_REQUEST["mod"]);
require_once("footer.php");
