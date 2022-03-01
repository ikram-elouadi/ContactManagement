<?php

class UsersContr extends Users{

          public function createUser(string $firstName,string $lastName,string $imgpath,string $tel1,string $tel2,string $adr,string $em1,string $em2,int $id_g ){
             $this->setUser($firstName,$lastName,$imgpath,$tel1,$tel2,$adr,$em1,$em2,$id_g);
          }

          public function modifyUser(int $id,string $firstName,string $lastName,string $imgpath,string $tel1,string $tel2,string $adr,string $em1,string $em2,int $id_g){
                $this->updateUser($id,$firstName,$lastName,$imgpath,$tel1,$tel2,$adr,$em1,$em2,$id_g);
          } 

          public function deleteUser(int $id){
                $this->delete($id);
          }
    
          
   }