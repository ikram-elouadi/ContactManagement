<?php

class Groupconst extends Groupes{

          public function createGroupe(string $name,string $imgpath){
             $this->setGroupe($name,$imgpath);
          }

        //   public function modifyUser(int $id,string $firstName,string $lastName,string $imgpath,string $tel1,string $tel2,string $adr,string $em1,string $em2,int $id_g){
        //         $this->updateUser($id,$firstName,$lastName,$imgpath,$tel1,$tel2,$adr,$em1,$em2,$id_g);
        //   } 

          public function deleteGroupe(int $id){
                $this->deleteG($id);
          }

          public function deleteGroupeUsers(int $id){
            $this->deleteGofus($id);
      }
          public function addtoGroupe(int $id,int $id2){
            $this->addContact($id,$id2);
         }


          public function getId(string $name){
           $result=$this->getOneId($name);
           return $result;
         }
    
          
   }