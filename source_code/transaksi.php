<?php
include_once("views/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Transaksi.controller.php");

$transaksi = new TransaksiController();

if(isset($_GET['add'])){
  //Jika tombol add new ditekan
  if (isset($_POST['submit'])) {
    //jika submit ditekan
    //memanggil add
    $transaksi->add($_POST);
  } else{
    //jika tidak, tampilkan form
    $transaksi->addView();
  }
} else if (!empty($_GET['id_edit'])) {
  //jika mendapat id_edit (tombol edit ditekan)
  //tampung id
  $id = $_GET['id_edit'];
  if (isset($_POST['submit'])) {
    //jika submit ditekan
    //panggil edit
    $transaksi->edit($id, $_POST);
  } else{
    //jika tidak, tampilkan form
    $transaksi->editView($id);
  }
} 
else if (!empty($_GET['id_hapus'])) {
  //jika mendapat id_hapus (tombol hapus ditekan)
  //tampung id
  $id = $_GET['id_hapus'];
  //panggil hapus
  $transaksi->delete($id);
} else{  
  //jika tidak ada tombol yg ditekan
  //menampilkan tabel transaksi
  $transaksi->index();
}
