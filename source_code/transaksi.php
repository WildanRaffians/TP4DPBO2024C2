<?php
include_once("views/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Transaksi.controller.php");

$transaksi = new TransaksiController();

if(isset($_GET['add'])){
  if (isset($_POST['submit'])) {
    //memanggil add
    $transaksi->add($_POST);
  } else{
    $transaksi->addView();
  }
} else if (!empty($_GET['id_edit'])) {
  //memanggil add
  $id = $_GET['id_edit'];
  if (isset($_POST['submit'])) {
    $transaksi->edit($id, $_POST);
  } else{
    $transaksi->editView($id);
  }
} 
else if (!empty($_GET['id_hapus'])) {
  //memanggil add
  $id = $_GET['id_hapus'];
  $transaksi->delete($id);
} else{  
  $transaksi->index();
}
