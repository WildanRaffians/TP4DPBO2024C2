<?php
//Models transaksi
//berhubungan langsung dengan database

class Transaksi extends DB{

    //mendapat data transaksi
    function getTransaksi() {
        $query = "SELECT * FROM transaksi";
        return $this->execute($query);
    }
    
    //mendapat data transaksi join dengan members
    function getTransaksiJoin() {
        $query = "SELECT * FROM transaksi JOIN members ON transaksi.member=members.id ORDER BY transaksi.id_transaksi";
        return $this->execute($query);
    }
    
    //mendapat data transaksi berdasar id tertentu
    function getTransaksiById($id) {
        $query = "select * from transaksi where id_transaksi=$id";
        return $this->execute($query);
    }

    //menambah data ke database
    function add($data){
        $member = $data['member'];
        $jumlah_pembayaran = $data['jumlah_pembayaran'];

        $query = " INSERT INTO `transaksi`(`member`, `jumlah_pembayaran`) VALUES ( '$member', '$jumlah_pembayaran')";

        return $this->execute($query);
    }

    //menghapus data dari databse
    function delete($id){
        $query = "DELETE from `transaksi` where id_transaksi=$id";
        return $this->execute($query);
    }

    //mengupdate data database
    function update($id, $data){
        $member = $data['member'];
        $jumlah_pembayaran = $data['jumlah_pembayaran'];
    
        $query = "update transaksi set member='$member', jumlah_pembayaran='$jumlah_pembayaran' where id_transaksi='$id'";
        return $this->execute($query);
    }
}

?>