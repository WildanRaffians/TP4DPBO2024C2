<?php
    class EditTransaksiView{
        public function render($data){
            $member = $data['transaksi']['member'];
            $jumlah_pembayaran = $data['transaksi']['jumlah_pembayaran'];
            $dataForm = null;
            $dataForm .= '
            <label>MEMBER: </label>
                <select class="form-control" id="member" name="member" required>
                <option value="">Pilih jenis</option>
            ';

            foreach($data['members'] as $val){
                list($id, $nama) = $val;
                $selected = ($id == $member) ? 'selected' : '';
                $dataForm .= '<option value="'.$id.'"'.$selected.'>'.$nama.'</option>';
              }

            $dataForm .= '</select> <br>
              <label> JUMLAH PEMBAYARAN: </label>
              <input type="number" name="jumlah_pembayaran" value="'.$jumlah_pembayaran.'" class="form-control"> <br>

              <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
              <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
            ';

            $tpl = new Template("templates/form.html");

            $tpl->replace("DATA_FORM", $dataForm);
            $tpl->write(); 
        }
    }

?>