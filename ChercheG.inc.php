<?php
session_start();

require_once 'myAutoLoader.inc.php';


    if(isset($_POST['search'])){
        
        $n=htmlspecialchars($_POST['name']);
       
       if(empty($n)){
          
 
          $_SESSION['error1']= 'the name case is empty !!!';
 
          header("location:chercherGr.inc.php?search=failed&Name=empty");
 
        }else{

        $ob=new Groupconst;
        $i=(int)$ob->getId($n);

        if(empty($i)){

            require_once '../header2.php';
            echo "<h2 style=\"color:red; font-size:30px; height:50vh; \">the groupe you search for doesn't existe !!!</h2>";
            include_once '../footer2.php';

        }else{
            require_once '../header2.php';
        
        $ob2=new GroupeView;
        $ob2->showgroupe($i);
          
           
            require_once '../footer2.php';
      
        }
     }



    }
