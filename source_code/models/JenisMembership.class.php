<?php

class JenisMembership extends DB{

    function getJenisMembership() {
        $query = "SELECT * FROM jenis_membership";
        return $this->execute($query);
    }
    
    function getJenisMembershipById($id) {
        $query = "select * from jenis_membership where id_jenis_membership=$id";
        return $this->execute($query);
    }

    function add($data){
        $name = $data['nama_jenis_membership'];
        $harga = $data['harga'];
        $deskripsi = $data['deskripsi'];
        
        $query = " INSERT INTO `jenis_membership`(`nama_jenis_membership`, `harga`, `deskripsi`) VALUES ( '$name', '$harga', '$deskripsi' )";
        
        return $this->execute($query);
    }
    
    function delete($id){
        $query = "DELETE from `jenis_membership` where id_jenis_membership=$id";
        return $this->execute($query);
    }
    
    function update($id, $data){
        $name = $data['nama_jenis_membership'];
        $harga = $data['harga'];
        $deskripsi = $data['deskripsi'];
    
        $query = "update jenis_membership set nama_jenis_membership='$name', harga='$harga', deskripsi='$deskripsi' where id_jenis_membership='$id'";
        return $this->execute($query);
        
    }
}

?>