<?php
   class Users extends Dbh{

          protected function getUser(int $id){
              $sql="SELECT g.* ,u.*FROM gender g,users u WHERE id=? and u.id_g=g.id_g";
              $stmt=$this->connect()->prepare($sql);
              $stmt->execute([$id]);
              $result=$stmt->fetchAll();
              return $result;

          }

          protected function getUserByNum1(string $n){
            $sql="SELECT g.* ,u.*FROM gender g,users u WHERE u.tele1=? and u.id_g=g.id_g";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$n]);
            $result=$stmt->fetchAll();
            return $result;

        }

        protected function getUserByNum2(string $n){
          $sql="SELECT g.* ,u.*FROM gender g,users u WHERE u.tele2=? and u.id_g=g.id_g";
          $stmt=$this->connect()->prepare($sql);
          $stmt->execute([$n]);
          $result=$stmt->fetchAll();
          return $result;

      }

      protected function getUserByName(string $n){
        $sql="SELECT g.* ,u.*FROM gender g,users u WHERE u.firstName=? and u.id_g=g.id_g";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$n]);
        $result=$stmt->fetchAll();
        return $result;

    }


          protected function getAllIds(){
            $sql="SELECT id FROM users";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll();
            return $result;
          }

  

          protected function setUser(string $firstName,string $lastName,string $imgpath,string $tel1,string $tel2,string $adr,string $em1,string $em2,int $id_g){
              $sql="INSERT INTO users(firstName,lastName,image,tele1,tele2,adress,emailPer,emailPro,id_g) VALUES (?,?,?,?,?,?,?,?,?)";
              $stmt=$this->connect()->prepare($sql);
              $stmt->execute([$firstName,$lastName,$imgpath,$tel1,$tel2,$adr,$em1,$em2,$id_g]);
          }


          protected function updateUser(int $id,string $firstName,string $lastName,string $imgpath,string $tel1,string $tel2,string $adr,string $em1,string $em2,int $id_g){
            $sql="UPDATE users SET firstName=?,lastName=?,image=?,tele1=?,tele2=?,adress=?,emailPer=?,emailPro=?,id_g=? WHERE id=?";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$firstName,$lastName,$imgpath,$tel1,$tel2,$adr,$em1,$em2,$id_g,$id]);
          }

          protected function delete(int $id){
            $sql="DELETE FROM users WHERE id=?";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$id]);
          }
          
   }