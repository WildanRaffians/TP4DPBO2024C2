<?php
    class TambahJenisMembershipView{
        public function render(){
            $dataForm = null;

            $dataForm .= '
              <label> NAMA JENIS: </label>
              <input type="text" name="nama_jenis_membership" class="form-control"> <br>

              <label> HARGA: </label>
              <input type="number" name="harga" class="form-control"> <br>
              
              <label> DESKRIPSI: </label>
              <input type="text" name="deskripsi" class="form-control"> <br>
              
            <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
            <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
            ';

                
            $tpl = new Template("templates/form.html");

            $tpl->replace("DATA_FORM", $dataForm);
            $tpl->write(); 
        }
    }

?>