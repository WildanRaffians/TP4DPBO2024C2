<?php
include_once("conf.php");
include_once("models/JenisMembership.class.php");
include_once("views/JenisMembership.view.php");
include_once("views/TambahJenisMembership.view.php");
include_once("views/EditJenisMembership.view.php");

class JenisMembershipController{
    private $jenis_membership;

    function __construct(){
        $this->jenis_membership = new JenisMembership(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index() {
        $this->jenis_membership->open();
        $this->jenis_membership->getJenisMembership();
        $data = array();
        while($row = $this->jenis_membership->getResult()){
            array_push($data, $row);
        }
        $this->jenis_membership->close();

        $view = new JenisMembershipView();
        $view->render($data);
    }

    public function addView() {
        $view = new TambahJenisMembershipView();
        $view->render();
    }

    public function editView($id) {
        $this->jenis_membership->open();
        $this->jenis_membership->getJenisMembershipById($id);
        $data = $this->jenis_membership->getResult();
        $this->jenis_membership->close();

        $view = new EditJenisMembershipView();
        $view->render($data);
    }

    function add($data){
        $this->jenis_membership->open();
        $this->jenis_membership->add($data);
        $this->jenis_membership->close();
        
        header("location:jenisMembership.php");
    }
    
    function edit($id, $data){
        $this->jenis_membership->open();
        $this->jenis_membership->update($id, $data);
        $this->jenis_membership->close();
    
        header("location:jenisMembership.php");
    }
    
    function delete($id){
        $this->jenis_membership->open();
        $this->jenis_membership->delete($id);
        $this->jenis_membership->close();
    
        header("location:jenisMembership.php");
    }
}