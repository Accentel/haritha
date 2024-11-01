<?php
include_once("Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
echo $query = "SELECT * FROM labdept";
$result = $crud->getData($query);
?>