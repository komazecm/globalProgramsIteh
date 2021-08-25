<?php
include 'Zemlja.php';
include 'Program.php';
include "Database.php";

$konekcija = new mysqli("localhost","root","","itehdomaci1");

$konekcija->set_charset("utf8");

$db = new Database($konekcija);
?>