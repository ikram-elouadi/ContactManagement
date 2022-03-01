<?php

require_once 'myAutoLoader.inc.php';

require_once '../header2.php';


if(isset($_POST['drop'])){

$id=$_GET['id'];
$ob=new Groupconst;
$ob->deleteGroupeUsers($id);
$ob->deleteGroupe($id);

header("location:printGroupes.inc.php?delete=success&id=$id");

}


require_once '../footer2.php';
