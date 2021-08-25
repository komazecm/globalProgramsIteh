<?php
include "init.php"; //includujem da bih mogla da koristim varijablu $db

$naziv = strip_tags($_POST['naziv']);
$tipPrograma = strip_tags($_POST['tipPrograma']);
$zemlja = strip_tags($_POST['zemlja']);

$uspesno = $db->sacuvajProgram($naziv,$tipPrograma,$zemlja);

if($uspesno){
    echo "Uspešno sačuvan program";
}else{
    echo "Neuspešno sačuvan program";
}

?>