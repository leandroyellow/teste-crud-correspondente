<?php
require 'php/config.php';
require 'php/db-models/CorrespondenciaMysql.php';

$correspondencia = new CorrespondenciaMysql($pdo);

$id = filter_input(INPUT_GET, 'id');

if($id){
   

   $correspondencia->delete($id);
}

header("Location: index.php");
exit;

?>