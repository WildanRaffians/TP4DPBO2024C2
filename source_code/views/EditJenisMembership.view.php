<?php
    class EditJenisMembershipView{
        public function render($data){

            //tampung data
            $name = $data['nama_jenis_membership'];
            $harga = $data['harga'];
            $deskripsi = $data['deskripsi'];

            //form yang akan ditampilkan dengan data
            $dataForm = null;
            $dataForm .= '
            <label> NAMA JENIS: </label>
            <input type="text" name="nama_jenis_membership" value="'.$name.'" class="form-control"> <br>

            <label> HARGA: </label>
            <input type="number" name="harga" value="'.$harga.'" class="form-control"> <br>
            
            <label> DESKRIPSI: </label>
            <input type="text" name="deskripsi" value="'.$deskripsi.'" class="form-control"> <br>
            
            <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
            <a class="btn btn-info" type="submit" name="cancel" href="jenisMembership.php"> Cancel </a><br>
            ';

            //intansiasi template
            $title = 'Edit Jenis Membership';
            
            $tpl = new Template("templates/form.html");

            $tpl->replace("DATA_TITLE", $title);
            $tpl->replace("DATA_FORM", $dataForm);
            $tpl->write(); 
        }
    }
?>