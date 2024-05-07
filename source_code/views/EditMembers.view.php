<?php
    class EditMembersView{
        public function render($data){
            $name = $data['member']['name'];
            $email = $data['member']['email'];
            $phone = $data['member']['phone'];
            $jenis_membership = $data['member']['jenis_membership'];
            $dataForm = null;
            $dataForm .= '
              <label> NAME: </label>
              <input type="text" name="name" value="'.$name.'" class="form-control"> <br>

              <label> EMAIL: </label>
              <input type="text" name="email" value="'.$email.'" class="form-control"> <br>

              <label> PHONE: </label>
              <input type="text" name="phone" value="'.$phone.'" class="form-control"> <br>

            <label>JENIS MEMBERSHIP: </label>
                <select class="form-control" id="jenis_membership" name="jenis_membership" required>
                <option value="">Pilih jenis</option>
            ';

            foreach($data['jenis_membership'] as $val){
                list($id, $nama) = $val;
                $selected = ($id == $jenis_membership) ? 'selected' : '';
                $dataForm .= '<option value="'.$id.'"'.$selected.'>'.$nama.'</option>';
              }

            $dataForm .= '</select> <br>
              <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
              <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
            ';

            $tpl = new Template("templates/form.html");

            $tpl->replace("DATA_FORM", $dataForm);
            $tpl->write(); 
        }
    }

?>