<?php

require_once 'myAutoLoader.inc.php';

require_once '../header2.php';

    $id=$_GET['id'];

    if(isset($_POST['save'])){
        $fn=htmlspecialchars($_POST['firstName']);
        $ln= htmlspecialchars($_POST['lastName']);
        $im=$_FILES['image']['name'];
        $t1=htmlspecialchars($_POST['tele1']);
        $t2=htmlspecialchars($_POST['tele2']);
        $adr=htmlspecialchars($_POST['adress']);
        $ePer=htmlspecialchars($_POST['emailPer']);
        $ePro=htmlspecialchars($_POST['emailPro']);
        $idg=htmlspecialchars($_POST['id_g']);
 
       if(empty($fn)){
          
 
          $_SESSION['error1']= 'the first name case is empty !!!';
 
          header("location:../contact.php?create=failed&&firstName=empty");
 
       }else if(empty($ln)){
 
         $_SESSION["error2"]= 'the last name case is empty !!!';
 
         header("location:../contact.php?create=failed&&lastName=empty");
       }else if(empty($im)){
          
         $_SESSION["error3"]= 'please select an image !!!';
 
         header("location:../contact.php?create=failed&&image=empty");
       
       }else if(empty($t1)){
          
         $_SESSION["error4"]= 'please enter your personnel phone numbre !!!';
 
         header("location:../contact.php?create=failed&&tele1=empty");
 
       }else if(empty($t2)){
          
         $_SESSION["error5"]= 'please enter your professionnel phone numbre !!!';
 
         header("location:../contact.php?create=failed&&tele2=empty");
       
      }else if(empty($adr)){
 
         $_SESSION["error6"]= 'the adress case is empty !!!';
 
         header("location:../contact.php?create=failed&&Adress=empty");
 
      }else if(empty($ePer)){
 
         $_SESSION["error7"]= 'the email case is empty !!!';
 
         header("location:../contact.php?create=failed&&emailper=empty");
      }else if(!filter_var($ePer,FILTER_VALIDATE_EMAIL)){
 
         $_SESSION["error8"]= 'the email 1 is unvalide!!!';
 
         header("location:../contact.php?create=failed&&email1=unvalide");
 
      }else if(empty($ePer)){
 
         $_SESSION["error9"]= 'the email case is empty !!!';
 
         header("location:../contact.php?create=failed&&emailpro=empty");
      }else if(!filter_var($ePro,FILTER_VALIDATE_EMAIL)){
 
         $_SESSION["error10"]= 'the email 2 is unvalide!!!';
 
         header("location:../contact.php?create=failed&&email2=unvalide");
 
      }else if(empty($idg)){
 
       $_SESSION["error11"]= 'please select an option!!!';
 
       header("location:../contact.php?create=failed&&genre=empty");
     
      }else{

        $ob=new UsersContr;
        $ob->modifyUser($id,$fn,$ln,$im,$t1,$t2,$adr,$ePer,$ePro,$idg);
       //to uploads the images into the folder imgs/
       $filename = $_FILES["image"]["name"];
       $tempname = $_FILES["image"]["tmp_name"];   
       $folder = "imgs/".$filename;

      move_uploaded_file($tempname, $folder);

      header("location:../contact.php?update=success");
     }
    }






require_once '../footer2.php';
