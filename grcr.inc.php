<?php
   session_start();
   require_once 'myAutoLoader.inc.php';

   if(isset($_POST['createGr'])){

    $fn=htmlspecialchars($_POST['name']);
    $im=$_FILES['icon']['name'];

    if(empty($fn)){
         

        $_SESSION['error1']= 'the name case is empty !!!';

        header("location:groupeCreate.inc.php?create=failed&&name=empty");

     }else if(empty($im)){
         
        $_SESSION["error3"]= 'please select an image or icone!!!';

        header("location:groupeCreate.inc.php?create=failed&&icone=empty");
      
      }else{

        $ob=new Groupconst;
        $ob->createGroupe($fn,$im);

        $id=$ob->getId($fn);
        
        $filename = $_FILES["icon"]["name"];
        $tempname = $_FILES["icon"]["tmp_name"];   
        $folder = "imgs/".$filename;
 
       move_uploaded_file($tempname, $folder);
 
       header("location:print.inc.php?idgr=$id&create=success");
      }
   }