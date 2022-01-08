<?php
class Login{
    public function __construct(){
        $_SESSION['login']= '';

        if(isset($_REQUEST['login-submit'])){
            // Nếu chưa nhập user
            if(empty($_REQUEST['value-user']) || trim($_REQUEST['value-user'])==''){
                $_SESSION['login']= 'Hãy nhập login id';
            }
            // Nếu nhập user <4 ký tự
            else if(strlen(trim($_REQUEST['value-user']))<4){
                $_SESSION['login']= 'Hãy nhập login id tối thiểu 4 ký tự';
            }
            // Nếu chưa nhập password
            else if(empty($_REQUEST['value-password']) || trim($_REQUEST['value-password'])==''){
                $_SESSION['login']= 'Hãy nhập password';
            }
            // Nếu nhập password < 6 ký tự
            else if(strlen(trim($_REQUEST['value-password']))<6){
                $_SESSION['login']= 'Hãy nhập password tối thiểu 6 ký tự';
                
            }
            else{
                
                require_once './app/model/admin.php';
                $user = trim($_REQUEST['value-user']);
                $password = $_REQUEST['value-password'];
                $data = $Admin->select_All_Admin();
                $result = $this->check($data, $user, $password);
                if($result == null){
                    $_SESSION['login']= "Login id và password không đúng !!!";
                }
                   
                else  {
                    $_SESSION['login']= $result;
                    
                    header('location:'.URLROOT.'/?router=home');
                }
            }
        }
    }

    public function check($data, $user, $password){
        foreach($data as $row){
            if($row['login_id']==$user && $row['password']== $password){
                return $user;
            }
        }
        return null;
    }
}

$Login = new Login;

require_once './app/view/login.php';
