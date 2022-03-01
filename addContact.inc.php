<?php
 session_start();
?>

<?php
    require_once '../header2.php';
   
    if(isset($_POST['addCo'])){
        
?>
     

<form action="addC.inc.php?id=<?php echo $_GET['id']?>" class="formulaire" method="POST">
  
<div class="container">
        <div class="row">
            <div class="col-4">
                <label for="name">Groupe Name</label>

            </div>

            <div class="col-8">
         <input type="text" name="name" id="name" placeholder="enter the groupe name ">
            </div>
        </div>
        <?php
        if(isset($_SESSION['error1'])){
                $error = $_SESSION['error1'];
                echo "<span>$error</span>";
         }
        ?>  



   </div>

   <input type="submit" name="add" id="add" value="add">

</form>

<?php
    }

    include_once '../footer2.php';


   unset($_SESSION["error1"]);
    
