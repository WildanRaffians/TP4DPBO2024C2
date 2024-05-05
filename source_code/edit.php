<?php
include_once("views/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");

$members = new MembersController();

if (!empty($_GET['id_edit'])) {
  //memanggil add
  $id = $_GET['id_edit'];
  if (isset($_POST['submit'])) {
    $members->edit($id, $_POST);
  } else{
    $members->editData($id);
  }
}