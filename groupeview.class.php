<?php

class GroupeView extends Groupes{

  public function showgroupe(int $idgr){
    
      $result=$this->getGroupeContact($idgr);
      if($result!=NULL){  
      $n=$result[0]['name'];
      $p=$result[0]['icon'];
      
      ?>
       <?php echo'<br> <hr><div class="row" style="background-color:black;"><div class="col-4"><img src="imgs/'.$p.'"/>
        </div>  <div class="col-4" style="color:gold; font-size:30px;" > GROUPE NAME: '.$n.'</div>
        <div class="col-3"><form action="deleteGroupe.inc.php?id='.$idgr.'"
        method="POST"><button type="submit" id="delete" formaction="deleteGroupe.inc.php?id='.$idgr.'" name="drop">
        delete</button></div></div><hr><br><br>' ?>
        <?php
      $j=1;
foreach($result as $res){ ?>
  <h2 class="h">CONTACT N : <?php echo $j?></h2>
  <?php
  $j++;
      $id=(int)$res['id'];
      $fn=$res['firstName'];
      $ln=$res['lastName'];
      $path=$res['image'];
      $ad=$res['adress'];
      $t1=$res['tele1'];
      $t2=$res['tele2'];
      $emp=$res['emailPer'];
      $epr=$res['emailPro'];
      $gr=$res['type'];
      
 
echo '<div class="container con"><div class="row"><div class="col-6"> First Name:</div> <div class="col-6">'
.$fn.'</div></div><div class="row"><div class="col-6"> last Name: </div> <div class="col-6">'
.$ln.'</div></div><div class="row"><div class="col-6"> image: </div> <div class="col-6"><img src=
"imgs/'.$path.'"/>'.'</div></div><div class="row"><div class="col-6"> phone 1: </div><div class="col-6">'
.$t1.'</div></div><div class="row"><div class="col-6"> phone 2: </div> <div class="col-6">'
.$t2.'</div></div><div class="row"><div class="col-6"> adresse: </div> <div class="col-6">'.
$ad.'</div></div><div class="row"><div class="col-6"> Email personnel: </div> <div class="col-6">'.
$emp.'</div></div><div class="row"><div class="col-6"> Email Professionnel: </div> <div class="col-6">'.
$epr.'</div></div><div class="row"><div class="col-6"> Gender: </div> <div class="col-6">'.
$gr.'</div></div><div class="row"><div class="col-3"><form action="delete.inc.php?id='.$id.'"
 method="POST"><button type="submit" id="delete" formaction="delete.inc.php?id='.$id.'" name="delete">
delete</button></div><div class="col-3"></form><form action="formulUpd.inc.php?id='.$id.'&fn='.$fn.'" method="POST"><button
 type="submit" id="update" formaction="formulUpd.inc.php?id='.$id.'&fn='.$fn.'&ln='.$ln.'&path='.$path.'&ad='.$ad.
 '&tele1='.$t1.'&tele2='.$t2.'&emp='.$emp.'&epr='.$epr.'&genre='.$gr.'" name="update">update
</button></form></div> <div class="col-3"><form action="addContact.inc.php?id='.$id.'"
method="POST"><button type="submit" id="add" formaction="addContact.inc.php?id='.$id.'" name="addCo">
addToGroupe</button></div></div></div>';




}

}        
        
        

      }
    

        public function showAllgroupes(){
            $ids=$this->getAllIdsG();
            
            foreach($ids as $i){
                $result=$this->getGroupeContact($i['idgr']);
              if($result!=NULL){  
              $n=$result[0]['name'];
              $p=$result[0]['icon'];
              $idgr=(int)$result[0]['idgr'];
              ?>
               <?php echo'<br> <hr><div class="row" style="background-color:black;"><div class="col-4"><img src="imgs/'.$p.'"/>
                </div>  <div class="col-4" style="color:gold; font-size:30px;" > GROUPE NAME: '.$n.'</div>
                <div class="col-3"><form action="deleteGroupe.inc.php?id='.$idgr.'"
                method="POST"><button type="submit" id="delete" formaction="deleteGroupe.inc.php?id='.$idgr.'" name="drop">
                delete</button></div></div><hr><br><br>' ?>
                <?php
              $j=1;
        foreach($result as $res){ ?>
          <h2 class="h">CONTACT N : <?php echo $j?></h2>
          <?php
          $j++;
              $id=(int)$res['id'];
              $fn=$res['firstName'];
              $ln=$res['lastName'];
              $path=$res['image'];
              $ad=$res['adress'];
              $t1=$res['tele1'];
              $t2=$res['tele2'];
              $emp=$res['emailPer'];
              $epr=$res['emailPro'];
              $gr=$res['type'];
              
         
     echo '<div class="container con"><div class="row"><div class="col-6"> First Name:</div> <div class="col-6">'
        .$fn.'</div></div><div class="row"><div class="col-6"> last Name: </div> <div class="col-6">'
        .$ln.'</div></div><div class="row"><div class="col-6"> image: </div> <div class="col-6"><img src=
        "imgs/'.$path.'"/>'.'</div></div><div class="row"><div class="col-6"> phone 1: </div><div class="col-6">'
        .$t1.'</div></div><div class="row"><div class="col-6"> phone 2: </div> <div class="col-6">'
        .$t2.'</div></div><div class="row"><div class="col-6"> adresse: </div> <div class="col-6">'.
        $ad.'</div></div><div class="row"><div class="col-6"> Email personnel: </div> <div class="col-6">'.
        $emp.'</div></div><div class="row"><div class="col-6"> Email Professionnel: </div> <div class="col-6">'.
        $epr.'</div></div><div class="row"><div class="col-6"> Gender: </div> <div class="col-6">'.
        $gr.'</div></div><div class="row"><div class="col-3"><form action="delete.inc.php?id='.$id.'"
         method="POST"><button type="submit" id="delete" formaction="delete.inc.php?id='.$id.'" name="delete">
        delete</button></div><div class="col-3"></form><form action="formulUpd.inc.php?id='.$id.'&fn='.$fn.'" method="POST"><button
         type="submit" id="update" formaction="formulUpd.inc.php?id='.$id.'&fn='.$fn.'&ln='.$ln.'&path='.$path.'&ad='.$ad.
         '&tele1='.$t1.'&tele2='.$t2.'&emp='.$emp.'&epr='.$epr.'&genre='.$gr.'" name="update">update
        </button></form></div> <div class="col-3"><form action="addContact.inc.php?id='.$id.'"
        method="POST"><button type="submit" id="add" formaction="addContact.inc.php?id='.$id.'" name="addCo">
       addToGroupe</button></div></div></div>';

    

     
    }

  }        
                
                
      
              }
            }

        }
          
       