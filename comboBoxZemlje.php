<?php
include "init.php";

$zemlje = $db->vratiZemlje();
foreach ($zemlje as $zemlja){
?>
<option value="<?php echo $zemlja->getId() ?>"><?php echo $zemlja->getZemlja() ?></option>
<?php
}

?>