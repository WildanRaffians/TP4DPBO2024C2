<?php
    class EditMembersView{
        public function render($data){
            $name = $data['name'];
            $email = $data['email'];
            $phone = $data['phone'];
            $dataForm = null;
            $dataForm .= '
              <label> NAME: </label>
              <input type="text" name="name" value="'.$name.'" class="form-control"> <br>

              <label> EMAIL: </label>
              <input type="text" name="email" value="'.$email.'" class="form-control"> <br>

              <label> PHONE: </label>
              <input type="text" name="phone" value="'.$phone.'" class="form-control"> <br>

              <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
              <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
            ';

            $tpl = new Template("templates/form.html");

            $tpl->replace("DATA_FORM", $dataForm);
            $tpl->write(); 
        }
    }

?>