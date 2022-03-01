<?php

require_once 'myAutoLoader.inc.php';

require_once '../header2.php';


if(isset($_POST['delete'])){

$id=$_GET['id'];
$ob=new UsersContr;
$ob->deleteUser($id);
echo '<div class="deleted">you have deleted the user that has the id ='.$id.'</div>';

}


require_once '../footer2.php';

