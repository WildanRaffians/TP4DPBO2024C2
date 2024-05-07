<?php
include_once("conf.php");
include_once("models/Members.class.php");
include_once("models/JenisMembership.class.php");
include_once("views/Members.view.php");
include_once("views/TambahMembers.view.php");
include_once("views/EditMembers.view.php");

//Controller untuk members
//Mengatur hubungan view dengan models members

class MembersController{
    private $members;
    private $jenis_membership;

    function __construct(){
        $this->members = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
        $this->jenis_membership = new JenisMembership(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    //memberikan data ke view untuk menampilkan tabel
    public function index() {
        $this->members->open();
        $this->members->getMembersJoin();
        $data = array();
        while($row = $this->members->getResult()){
            array_push($data, $row);
        }
        $this->members->close();

        $view = new MembersView();
        $view->render($data);
    }

    //menuju add view dengan data yang dibutuhkan
    public function addView() {
        $this->jenis_membership->open();
        $this->jenis_membership->getJenisMembership();
        $data = array();
        while($row = $this->jenis_membership->getResult()){
            array_push($data, $row);
        }
        $this->jenis_membership->close();

        $view = new TambahMembersView();
        $view->render($data);
    }

    //menuju edit view dengan data yang akan di edit dan data yg dibutuhkan
    public function editView($id) {
        $this->members->open();
        $this->jenis_membership->open();

        $this->members->getMembersById($id);
        $this->jenis_membership->getJenisMembership();

        $data = array(
            'member' => $this->members->getResult(),
            'jenis_membership' => array()
        );

        while($row = $this->jenis_membership->getResult()){
            array_push($data['jenis_membership'], $row);
        }

        $this->members->close();
        $this->jenis_membership->close();

        $view = new EditMembersView();
        $view->render($data);
    }

    //melakukan add ke database melalui models
    function add($data){
        $this->members->open();
        $this->members->add($data);
        $this->members->close();
        
        header("location:index.php");
    }
    
    //melakukan edit ke database melalui models
    function edit($id, $data){
        $this->members->open();
        $this->members->update($id, $data);
        $this->members->close();
        
        header("location:index.php");
    }
    
    //melakukan delete ke database melalui models
    function delete($id){
        $this->members->open();
        $this->members->delete($id);
        $this->members->close();
    
        header("location:index.php");
    }
}