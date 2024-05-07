<?php

class Transaksi extends DB{

    function getTransaksi() {
        $query = "SELECT * FROM transaksi";
        return $this->execute($query);
    }
    
    function getTransaksiJoin() {
        $query = "SELECT * FROM transaksi JOIN members ON transaksi.member=members.id ORDER BY transaksi.id_transaksi";
        return $this->execute($query);
    }
    
    function getTransaksiById($id) {
        $query = "select * from transaksi where id_transaksi=$id";
        return $this->execute($query);
    }

    function add($data){
        $member = $data['member'];
        $jumlah_pembayaran = $data['jumlah_pembayaran'];

        $query = " INSERT INTO `transaksi`(`member`, `jumlah_pembayaran`) VALUES ( '$member', '$jumlah_pembayaran')";

        return $this->execute($query);
    }

    function delete($id){
        $query = "DELETE from `transaksi` where id_transaksi=$id";
        return $this->execute($query);
    }

    function update($id, $data){
        $member = $data['member'];
        $jumlah_pembayaran = $data['jumlah_pembayaran'];
    
        $query = "update transaksi set member='$member', jumlah_pembayaran='$jumlah_pembayaran' where id_transaksi='$id'";
        return $this->execute($query);
        
    }
}

?>