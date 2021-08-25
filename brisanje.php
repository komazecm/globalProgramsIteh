<?php
include "init.php"; //includujem da bih mogla da koristim varijablu $db

$id = $_GET['id'];

$uspesno = $db->obrisi($id);

if($uspesno){
    echo "Uspešno obrisan program";
}else{
    echo "Neuspešno obrisan program";
}

?>