<?php
   require_once 'myAutoLoader.inc.php';
   require_once '../header2.php';

   if(isset($_GET['searchNum1'])){
        $n=$_GET['Tele1'];

        $ob=new UsersView;
        $ob->showUserByNum1($n);

      
    
    }



    if(isset($_GET['searchNum2'])){
        $n=$_GET['Tele2'];

        $ob=new UsersView;
        $ob->showUserByNum2($n);

      
    
    }

    if(isset($_GET['searchName'])){
        $n=$_GET['FirstName'];

        $ob=new UsersView;
        $ob->showUserByName($n);

      
    
    }

   
   
    require_once '../footer2.php';