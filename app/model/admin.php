<?php 
require_once './app/common/db.php';

class Admin extends DB{
    public function select_All_Admin(){
        $sql = "SELECT * FROM admins";
        return $this->__conn->query($sql);        
    }

    
    public function select_All_LoginId($login_id){
        $sql = "SELECT * FROM admins where login_id='$login_id'";
        return $this->__conn->query($sql);   
    }
    
}

$Admin = new Admin();
