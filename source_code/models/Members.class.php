<?php
//Models members
//berhubungan langsung dengan database

class Members extends DB{

    //mendapat data members
    function getMembers() {
        $query = "SELECT * FROM members";
        return $this->execute($query);
    }
    
    //mendapat data members join dengan jenis membership
    function getMembersJoin() {
        $query = "SELECT * FROM members JOIN jenis_membership ON members.jenis_membership=jenis_membership.id_jenis_membership ORDER BY members.id";
        return $this->execute($query);
    }

    //mendapat data member berdasar id tertentu
    function getMembersById($id) {
        $query = "select * from members where id=$id";
        return $this->execute($query);
    }

    //menambah data ke database
    function add($data){
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $jenis_membership = $data['jenis_membership'];

        $query = " INSERT INTO `members`(`name`, `email`, `phone`, `jenis_membership`) VALUES ( '$name', '$email', '$phone', '$jenis_membership' )";

        return $this->execute($query);
    }
    
    //menghapus data dari databse
    function delete($id){
        $query = "DELETE from `members` where id=$id";
        return $this->execute($query);
    }

    //mengupdate data database
    function update($id, $data){
        $name=$data["name"];
        $email=$data["email"];
        $phone=$data["phone"];
        $jenis_membership=$data["jenis_membership"];
    
        $query = "update members set name='$name', email='$email', phone='$phone', jenis_membership='$jenis_membership' where id='$id'";
        return $this->execute($query);
        
    }
}

?>