<?php
include_once("views/Template.class.php");
include_once("views/TambahMembers.view.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");

$members = new MembersController();
$view = new TambahMembersView();

if (isset($_POST['submit'])) {
  //memanggil add
  $members->add($_POST);
} else{
  $view->render();
}