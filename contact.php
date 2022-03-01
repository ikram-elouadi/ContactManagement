<?php
 session_start();
?>

<?php
    require_once 'header.php';
?>


<div class="all">

 <form action="includes/create.inc.php" class="formulaire" method="POST" enctype="multipart/form-data">

    <div class="modif">
        
    <button type="submit" name="search" formaction="includes/search.inc.php" id="search">search</button>
    <button type="submit" name="groupeCreate" formaction="includes/groupeCreate.inc.php" id="groupeCreate">Create a groupe</button>
    <button type="submit" name="printGroupe" formaction="includes/printGroupes.inc.php" id="printG">Show all groupes</button>
    <button type="submit" name="searchGroupe" formaction="includes/chercherGr.inc.php" id="printG">search groupe</button>
    
    </div>
    
    <div class="container">

     

        <div class="row">
            <div class="col-4">
                <label for="firstName">First Name</label>

            </div>

            <div class="col-8">
         <input type="text" name="firstName" id="firstName" placeholder="your first name">
            </div>
        </div>
        <?php
        if(isset($_SESSION['error1'])){
                $error = $_SESSION['error1'];
                echo "<span>$error</span>";
         }
        ?>  


        <div class="row">
            <div class="col-4">
                <label for="lastName">Last Name</label>

            </div>

            <div class="col-8">
                <input type="text" name="lastName" id="lastName" placeholder="your last name">
            </div>
        </div>

        <?php
        if(isset($_SESSION['error2'])){
                $error = $_SESSION['error2'];
                echo "<span>$error</span>";
         }
       ?>  


        <div class="row">
            <div class="col-4">
                <label for="">Your Image</label>

            </div>

            <div class="col-8">

            <label for="image" class="imgUP">

                <input type="file" name="image" id="image" accept="image/*">

                Upload your image |  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                    <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                </svg>
            </label>
            </div>
        </div>

        <?php
        if(isset($_SESSION['error3'])){
                $error = $_SESSION['error3'];
                echo "<span>$error</span>";
         }
       ?>  

        <div class="row">
            <div class="col-4">
                <label for="tele1">telephone1</label>

            </div>

            <div class="col-8">
                   <input type="tel" name="tele1" id="tele1" placeholder="your phone nombre 1">
            </div>

        </div>

        <?php
        if(isset($_SESSION['error4'])){
                $error = $_SESSION['error4'];
                echo "<span>$error</span>";
         }
       ?>  

        <div class="row">
            <div class="col-4">
                <label for="tele2">telephone2</label>

            </div>

            <div class="col-8">
                <input type="tel" name="tele2" id="tele2" placeholder="your phone nombre 2">

            </div>
        </div>


        <?php
        if(isset($_SESSION['error5'])){
                $error = $_SESSION['error5'];
                echo "<span>$error</span>";
         }
       ?>  
    


    <div class="row">
        <div class="col-4">
            <label for="adress" >Adresse</label>

        </div>

        <div class="col-8">
           <input type="text" name="adress"  id="adress" placeholder="your adresse">
        </div>
    </div>

    <?php
        if(isset($_SESSION['error6'])){
                $error = $_SESSION['error6'];
                echo "<span>$error</span>";
         }
       ?>  



    <div class="row">
        <div class="col-4">
            <label for="emailPer">Email Personnel</label>

        </div>

        <div class="col-8">
            <input type="email" name="emailPer" id="emailPer" placeholder="email personnel">
  
        </div>
    </div>

    <?php
        if(isset($_SESSION['error7'])){
                $error = $_SESSION['error7'];
                echo "<span>$error</span>";
         }
       ?>  

<?php
        if(isset($_SESSION['error8'])){
                $error = $_SESSION['error8'];
                echo "<span>$error</span>";
         }
       ?>  

    <div class="row">
        <div class="col-4">
            <label for="emailPro"> Email Professionnel</label>

        </div>

        <div class="col-8">

            <input type="email" name="emailPro" id="emailPro" placeholder="email professionnel">

        </div>
    </div>


    <?php
        if(isset($_SESSION['error9'])){
                $error = $_SESSION['error9'];
                echo "<span>$error</span>";
         }
       ?>  

     <?php
        if(isset($_SESSION['error10'])){
                $error = $_SESSION['error10'];
                echo "<span>$error</span>";
         }
       ?>  


    <div class="row">
        <div class="col-4">
            <label for="id_g">Gender</label>

        </div>

        <div class="col-8">
        <select name="id_g" id="id_g">
            <option value="">--please choose your gender--</option>
            <option value="2">Female</option>
            <option value="1">Male</option>
        </select>
        </div>
    </div>
 

    <?php
        if(isset($_SESSION['error11'])){
                $error = $_SESSION['error11'];
                echo "<span>$error</span>";
         }
       ?>  


</div>


<input type="submit" name="submit" value="create">



</form>
</div>

<?php
    include_once 'footer.php';
?>

<?php
   unset($_SESSION["error1"]);
   unset($_SESSION["error2"]);
   unset($_SESSION["error3"]);
   unset($_SESSION["error4"]);
   unset($_SESSION["error5"]);
   unset($_SESSION["error6"]);
   unset($_SESSION["error7"]);
   unset($_SESSION["error8"]);
   unset($_SESSION["error9"]);
   unset($_SESSION["error10"]);
   unset($_SESSION["error11"]);
    
?>