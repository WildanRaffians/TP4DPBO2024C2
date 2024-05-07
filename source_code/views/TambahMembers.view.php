<?php
    class TambahMembersView{
        public function render($data){
          
            //form yang akan ditampilkan
            $dataForm = null;
            $dataForm .= '
              <label> NAME: </label>
              <input type="text" name="name" class="form-control"> <br>

              <label> EMAIL: </label>
              <input type="text" name="email" class="form-control"> <br>

              <label> PHONE: </label>
              <input type="text" name="phone" class="form-control"> <br>
              
              <label>JENIS MEMBERSHIP: </label>
                <select class="form-control" id="jenis_membership" name="jenis_membership" required>
                <option value="">Pilih jenis</option>
              ';
              
              foreach($data as $val){
                  list($id, $nama) = $val;
                  $dataForm .= '<option value='.$id.'>'.$nama.'</option>';
                }
            $dataForm .= '</select> <br>
            <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
            <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
            ';

            $title = 'Add Member';
                
            //intansiasi template
            $tpl = new Template("templates/form.html");

            $tpl->replace("DATA_TITLE", $title);
            $tpl->replace("DATA_FORM", $dataForm);
            $tpl->write(); 
        }
    }

?>