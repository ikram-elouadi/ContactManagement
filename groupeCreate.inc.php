<?php
    session_start();
   require_once 'myAutoLoader.inc.php';
   require_once '../header2.php';

   if(isset($_POST['groupeCreate'])){

    ?>

    <form action="grcr.inc.php" method="POST" enctype="multipart/form-data">
      <div class="container">

        <div class="row">
          <div class="col-12">
             <input type="text" placeholder="write a groupe name"  name="name">
           </div>
        </div>
        
        <?php
        if(isset($_SESSION['error1'])){
                $error = $_SESSION['error1'];
                echo "<span>$error</span>";
         }
        ?> 
        
        <div class="row">
          <div class="col-12">
            
          <label for="image" class="imgUP">

              <input type="file" name="icon" id="image" accept="image/*">

                           Upload your groupe icone |  
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
           <div class="col-12">
             <input type="submit" value="create" id="groupeCreate" name="createGr">
           </div>
        </div>

       
      </div>
    </form>

    <?php
  }

 if(isset($_POST['add'])){
    $id1=(int)$_GET['id'];
    $id2=(int)$_GET['id2'];
    $ob2=new Groupconst;
    $ob2->addtoGroupe($id1,$id2);
    
    header("location:print.inc.php?add=success&idgr=$id2");
 }
    
  

    require_once '../footer2.php';
    unset($_SESSION["error1"]);
    unset($_SESSION["error3"]);