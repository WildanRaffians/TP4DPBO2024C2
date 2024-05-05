<?php
    class MembersView{
        public function render($data){
            $dataMembers = null;

            foreach($data as $val){
                list($id, $name, $email, $phone, $join_date) = $val;
                $dataMembers .= "
                <tr>
                    <th>". $id ."</th>
                    <td>". $name ."</td>
                    <td>". $email ."</td>
                    <td>". $phone ."</td>
                    <td>". $join_date ."</td>
                    <td>
                            <a class='btn btn-success' href='edit.php?id_edit=".$id."'>Edit</a>
                            <a class='btn btn-danger' href='index.php?id_hapus=".$id."'>Delete</a>
                            </td>
                </tr>
                ";
            }
            $tpl = new Template("templates/index.html");

            $tpl->replace("DATA_TABEL", $dataMembers);
            $tpl->write(); 
        }
    }

?>