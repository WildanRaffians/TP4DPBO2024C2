<?php
    class TambahTransaksiView{
        public function render($data){

            //form yang akan ditampilkan
            $dataForm = null;
            $dataForm .= '
              <label>MEMBER: </label>
                <select class="form-control" id="member" name="member" required>
                <option value="">Pilih member</option>
              ';
              
              foreach($data as $val){
                  list($id, $nama) = $val;
                  $dataForm .= '<option value='.$id.'>'.$nama.'</option>';
                }
            $dataForm .= '</select> <br>
            
            <label> JUMLAH PEMBAYARAN: </label>
            <input type="text" name="jumlah_pembayaran" class="form-control"> <br>

            <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
            <a class="btn btn-info" type="submit" name="cancel" href="transaksi.php"> Cancel </a><br>
            ';

            $title = 'Add Transaksi';
                
            //intansiasi template
            $tpl = new Template("templates/form.html");

            $tpl->replace("DATA_TITLE", $title);
            $tpl->replace("DATA_FORM", $dataForm);
            $tpl->write(); 
        }
    }

?>