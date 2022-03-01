<?php

class UsersView extends Users{
          public function showUser(int $id){
              $result=$this->getUser($id);

              $fn=$result[0]['firstName'];
              $ln=$result[0]['lastName'];
              $path=$result[0]['image'];
              $ad=$result[0]['adress'];
              $t1=$result[0]['tele1'];
              $t2=$result[0]['tele2'];
              $emp=$result[0]['emailPer'];
              $epr=$result[0]['emailPro'];
              $gr=$result[0]['type'];
         
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
        </button></form></div></div></div>';

        
if(isset($_GET['create'])||isset($_GET['add'])){
  $id2=$_GET['idgr'];
  echo ' <form action="groupeCreate.inc.php?id='.$id.'" method="POST"><button type="submit" id="add" formaction=
  "groupeCreate.inc.php?id='.$id.'&id2='.$id2.'" name="add">add to groupe
 </button></form></div></div></div>';
}



        }


    public function showUserByNum1(string $n){
          $result=$this->getUserByNum1($n);
          if($result==NULL){
            echo' <h2 style="color:red; font-size:50px; height:50vh">the number that you chose doesn\'t existe !!!</h2>';
          }else{
          
          $id=$result[0]['Id'];
          $fn=$result[0]['firstName'];
          $ln=$result[0]['lastName'];
          $path=$result[0]['image'];
          $ad=$result[0]['adress'];
          $t1=$result[0]['tele1'];
          $t2=$result[0]['tele2'];
          $emp=$result[0]['emailPer'];
          $epr=$result[0]['emailPro'];
          $gr=$result[0]['type'];
     
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
    </button></form></div></div></div>';
    }
    }


    public function showUserByNum2(string $n){
      $result=$this->getUserByNum2($n);
      if($result==NULL){
        echo' <h2 style="color:red; font-size:50px; height:50vh">the number that you chose doesn\'t existe !!!</h2>';
      }else{
      $id=$result[0]['Id'];
      $fn=$result[0]['firstName'];
      $ln=$result[0]['lastName'];
      $path=$result[0]['image'];
      $ad=$result[0]['adress'];
      $t1=$result[0]['tele1'];
      $t2=$result[0]['tele2'];
      $emp=$result[0]['emailPer'];
      $epr=$result[0]['emailPro'];
      $gr=$result[0]['type'];
 
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
</button></form></div></div></div>';
      }
}


public function showUserByName(string $n){
  $result=$this->getUserByName($n);

  if($result==NULL){
    echo' <h2 style="color:red; font-size:50px; height:50vh">the name that you chose doesn\'t existe !!!</h2>';
  }else{
  foreach($result as $k){
  $id=$k['Id'];
  $fn=$k['firstName'];
  $ln=$k['lastName'];
  $path=$k['image'];
  $ad=$k['adress'];
  $t1=$k['tele1'];
  $t2=$k['tele2'];
  $emp=$k['emailPer'];
  $epr=$k['emailPro'];
  $gr=$k['type'];

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
</button></form></div></div></div>';
  }
}
}

        public function showAll(){
            $ids=$this->getAllIds();
            $j=1;
            foreach($ids as $i){?>
                <h2 class="h">CONTACT N : <?php echo $j?></h2>
                <?php
                $j++;
                $this->showUser( $i['id']);
      
              }
            }

            public function searchShowId(int $i){
                 $this->showUser($i);
            }
        }
          
