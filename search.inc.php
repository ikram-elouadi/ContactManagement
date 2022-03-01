<?php
   require_once 'myAutoLoader.inc.php';
   require_once '../header2.php';

   if(isset($_POST['search'])){

    ?>

    <form action="chercher.inc.php" method="get">
      <div class="container">
        <div class="row">
          <div class="col-12">
             <input type="text" placeholder="write a personnel number"  name="Tele1">
           </div>
           <div class="row">
           <div class="col-12">
             <input type="submit" value="search" id="search" name="searchNum1">
           </div>
           </div>
        </div>

        
        <div class="row">
          <div class="col-12">
             <input type="text" placeholder="write a professional number"  name="Tele2">
           </div>
        </div>
        <div class="row">
           <div class="col-12">
             <input type="submit" value="search" id="search" name="searchNum2">
           </div>
        </div>

        <div class="row">
          <div class="col-12">
             <input type="text" placeholder="write a name"  name="FirstName">
           </div>
        </div>
        <div class="row">
           <div class="col-12">
             <input type="submit" value="search" id="search" name="searchName">
           </div>
        </div>
      </div>
    </form>

    <?php

    
    }

    require_once '../footer2.php';