<?php
   class Groupes extends Dbh{

          protected function getGroupe(int $id){
              $sql="SELECT g,*FROM groupe g WHERE id=?";
              $stmt=$this->connect()->prepare($sql);
              $stmt->execute([$id]);
              $result=$stmt->fetchAll();
              return $result;
          }

    

          protected function getAllIdsG(){
            $sql="SELECT idgr FROM groupe";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll();
            return $result;
          }

          protected function getGroupeContact(int $id){
            $sql="SELECT gu.*, u.* ,g.*, ge.* FROM usersgroupe gu,users u,groupe g,gender ge WHERE g.idgr=? and u.Id=gu.id and g.idgr=gu.idgr and u.id_g=ge.id_g";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$id]);
            $result=$stmt->fetchAll();
            return $result;
        }

          protected function getOneId(string $name){
            $sql="SELECT idgr FROM groupe where name=?";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$name]);
            $result=$stmt->fetchAll();
            if($result!=NULL)
            return $result[0]['idgr'];
            else 
             return NULL;
          }



        
        protected function addContact(int $id,int $id2){
            $sql="INSERT INTO usersgroupe(Id,idgr) VALUES (?,?)";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$id,$id2]);
        }

  

         protected function setGroupe(string $name,string $imgpath){
              $sql="INSERT INTO groupe(name,icon) VALUES (?,?)";
              $stmt=$this->connect()->prepare($sql);
              $stmt->execute([$name,$imgpath]);
          }


       
          protected function deleteG(int $id){
            $sql="DELETE FROM groupe WHERE idgr=?";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$id]);
          }

          protected function deleteGofus(int $id){
            $sql="DELETE FROM usersgroupe WHERE idgr=?";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$id]);
          }
          
   }