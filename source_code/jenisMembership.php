<?php
include_once("views/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/JenisMembership.controller.php");

$jenisMembership = new JenisMembershipController();

if(isset($_GET['add'])){
  if (isset($_POST['submit'])) {
    //memanggil add
    $jenisMembership->add($_POST);
  } else{
    $jenisMembership->addView();
  }
} else if (!empty($_GET['id_edit'])) {
  //memanggil add
  $id = $_GET['id_edit'];
  if (isset($_POST['submit'])) {
    $jenisMembership->edit($id, $_POST);
  } else{
    $jenisMembership->editView($id);
  }
} 
else if (!empty($_GET['id_hapus'])) {
  //memanggil add
  $id = $_GET['id_hapus'];
  $jenisMembership->delete($id);
} else{  
  $jenisMembership->index();
}
