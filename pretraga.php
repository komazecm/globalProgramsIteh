<?php
include "init.php"; //includujem da bih mogla da koristim varijablu $db

$tip = $_GET['tip'];

$programi = $db->pretraziPrograme($tip);

if(count($programi)>0){
?>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Naziv programa</th>
        <th>Zemlja</th>
        <th>Tip programa</th>
        <th>Učitaj</th>
        <th>Obriši</th>
    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($programi as $program){
        ?>
        <tr>
            <td><?php echo $program->getNaziv(); ?></td>
            <td><?php echo $program->getZemlja()->getZemlja(); ?></td>
            <td><?php echo $program->getTipPrograma(); ?></td>
            <td><button class="btn btn-info" onclick="ucitaj(<?php echo $program->getIdProgram(); ?>,'<?php echo $program->getNaziv(); ?>','<?php echo $program->getTipPrograma(); ?>',<?php echo $program->getZemlja()->getId(); ?>)"><i class="icon-refresh"></i> </button> </td>
            <td><button class="btn btn-danger" onclick="obrisi(<?php echo $program->getIdProgram(); ?>)"><i class="icon-trash"></i> </button> </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
<?php
}else{
    echo "Nema rezultata za ovaj tip programa";
}

?>