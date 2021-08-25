<?php
include "init.php"; //includujem da bih mogla da koristim varijablu $db

$naziv = strip_tags($_POST['naziv']);
$tipPrograma = strip_tags($_POST['tipPrograma']);
$zemlja = strip_tags($_POST['zemlja']);
$programID = strip_tags($_POST['programID']);

$uspesno = $db->izmeniProgram($programID,$naziv,$tipPrograma,$zemlja);

if($uspesno){
    echo "Uspešno izmenjen program";
}else{
    echo "Neuspešno izmenjen program";
}

?>