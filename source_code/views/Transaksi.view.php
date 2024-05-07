<?php
    class TransaksiView{
        public function render($data){
            $dataMembers = null;
            $dataHead = null;

            $dataHead .= '
                <tr>
                    <th>ID</th>
                    <th>MEMBER</th>
                    <th>JUMLAH PEMBAYARAN</th>
                    <th>WAKTU</th>
                    <th>ACTIONS</th>
                </tr>';

            foreach($data as $val){
                $id = $val['id_transaksi'];
                $name = $val['name'];
                $jml_pembayaran = $val['jumlah_pembayaran'];
                $waktu_transaksi = $val['waktu_transaksi'];
                $dataMembers .= "
                <tr>
                    <th>". $id ."</th>
                    <td>". $name ."</td>
                    <td>". $jml_pembayaran ."</td>
                    <td>". $waktu_transaksi ."</td>
                    <td>
                        <a class='btn btn-success' href='transaksi.php?id_edit=".$id."'>Edit</a>
                        <a class='btn btn-danger' href='transaksi.php?id_hapus=".$id."'>Delete</a>
                    </td>
                </tr>
                ";
            }
            $tpl = new Template("templates/index.html");
            $trsACT = 'active';
            $addLink = 'transaksi';

            $tpl->replace("TRSACTIVE", $trsACT);

            $tpl->replace("DATA_TABEL", $dataMembers);
            $tpl->replace("DATA_HEAD", $dataHead);
            $tpl->replace("DATA_ADD_LINK", $addLink);
            $tpl->write(); 
        }
    }

?>