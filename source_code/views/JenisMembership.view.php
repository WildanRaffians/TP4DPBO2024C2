<?php
    class JenisMembershipView{
        public function render($data){

            $dataJenisMembership = null;
            $dataHead = null;
            $dataHead .= '
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>HARGA</th>
                    <th>DESKRIPSI</th>
                    <th>ACTIONS</th>
                </tr>';

            foreach($data as $val){
                list($id, $name, $harga, $deskripsi) = $val;
                $dataJenisMembership .= "
                <tr>
                    <th>". $id ."</th>
                    <td>". $name ."</td>
                    <td>". $harga ."</td>
                    <td>". $deskripsi ."</td>
                    <td>
                            <a class='btn btn-success' href='jenisMembership.php?id_edit=".$id."'>Edit</a>
                            <a class='btn btn-danger' href='jenisMembership.php?id_hapus=".$id."'>Delete</a>
                            </td>
                </tr>
                ";
            }
            $tpl = new Template("templates/index.html");
            $jmACT = 'active';
            $addLink = 'jenisMembership';
            $tpl->replace("JMACTIVE", $jmACT);
            $tpl->replace("DATA_TABEL", $dataJenisMembership);
            $tpl->replace("DATA_HEAD", $dataHead);
            $tpl->replace("DATA_ADD_LINK", $addLink);
            $tpl->write(); 
        }
    }
?>