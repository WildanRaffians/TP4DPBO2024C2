<?php
    class TambahMembersView{
        public function render(){
            $dataForm = null;

            $dataForm .= '
              <label> NAME: </label>
              <input type="text" name="name" class="form-control"> <br>

              <label> EMAIL: </label>
              <input type="text" name="email" class="form-control"> <br>

              <label> PHONE: </label>
              <input type="text" name="phone" class="form-control"> <br>

              <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
              <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
            ';

            $tpl = new Template("templates/form.html");

            $tpl->replace("DATA_FORM", $dataForm);
            $tpl->write(); 
        }
    }

?>