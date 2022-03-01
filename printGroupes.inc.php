<?php

require_once 'myAutoLoader.inc.php';

require_once '../header2.php';

// if(isset($_POST['printGroupe'])){

$ob=new GroupeView;
$ob->showAllgroupes();

// }
require_once '../footer2.php';
