<?php

class Members extends DB{

    function getMembers() {
        $query = "SELECT * FROM members";
        return $this->execute($query);
    }
    
    function getMembersJoin() {
        $query = "SELECT * FROM members JOIN jenis_membership ON members.jenis_membership=jenis_membership.id_jenis_membership ORDER BY members.id";
        return $this->execute($query);
    }
    
    function getMembersById($id) {
        $query = "select * from members where id=$id";
        return $this->execute($query);
    }

    function add($data){
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $jenis_membership = $data['jenis_membership'];

        $query = " INSERT INTO `members`(`name`, `email`, `phone`, `jenis_membership`) VALUES ( '$name', '$email', '$phone', '$jenis_membership' )";

        return $this->execute($query);
    }

    function delete($id){
        $query = "DELETE from `members` where id=$id";
        return $this->execute($query);
    }

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