<?php
include_once("conf.php");
include_once("models/Transaksi.class.php");
include_once("models/Members.class.php");
include_once("views/Members.view.php");
include_once("views/Transaksi.view.php");
include_once("views/TambahMembers.view.php");
include_once("views/TambahTransaksi.view.php");
include_once("views/EditMembers.view.php");
include_once("views/EditTransaksi.view.php");

//Controller untuk transaksi
//Mengatur hubungan view dengan models members

class TransaksiController{
    private $transaksi;
    private $members;

    function __construct(){
        $this->transaksi = new Transaksi(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
        $this->members = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    //memberikan data ke view untuk menampilkan tabel
    public function index() {
        $this->transaksi->open();
        $this->transaksi->getTransaksiJoin();
        $data = array();
        while($row = $this->transaksi->getResult()){
            array_push($data, $row);
        }
        $this->transaksi->close();

        $view = new TransaksiView();
        $view->render($data);
    }

    //menuju add view dengan data yang dibutuhkan
    public function addView() {
        $this->members->open();
        $this->members->getMembers();
        $data = array();
        while($row = $this->members->getResult()){
            array_push($data, $row);
        }
        $this->members->close();

        $view = new TambahTransaksiView();
        $view->render($data);
    }

    //menuju edit view dengan data yang akan di edit dan data yg dibutuhkan
    public function editView($id) {
        $this->transaksi->open();
        $this->members->open();

        $this->transaksi->getTransaksiById($id);
        $this->members->getMembers();

        $data = array(
            'transaksi' => $this->transaksi->getResult(),
            'members' => array()
        );

        while($row = $this->members->getResult()){
            array_push($data['members'], $row);
        }

        $this->transaksi->close();
        $this->members->close();

        $view = new EditTransaksiView();
        $view->render($data);
    }

    //melakukan add ke database melalui models
    function add($data){
        $this->transaksi->open();
        $this->transaksi->add($data);
        $this->transaksi->close();
        
        header("location:transaksi.php");
    }
    
    //melakukan edit ke database melalui models
    function edit($id, $data){
        $this->transaksi->open();
        $this->transaksi->update($id, $data);
        $this->transaksi->close();
    
        header("location:transaksi.php");
    }
    
    //melakukan delete ke database melalui models
    function delete($id){
        $this->transaksi->open();
        $this->transaksi->delete($id);
        $this->transaksi->close();
    
        header("location:transaksi.php");
    }
}