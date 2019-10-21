<?php

class user extends pdocrudhandler {
    public function __construct() {
        $this->_pdo = $this->connect();
        session_start();
    }
    public function logout(){
        if(isset($_SESSION['login'])){
            $_SESSION['login'] = false;
            unset($_SESSION['userid']);
            unset($_SESSION['password']);
            session_destroy();
        }
    }
    public function login($username, $password)
    {
        $res = $this->select('customer', array("*"), "where email = ? and password = ?", array($username, $password));
        if ($res['status'] == 'success' && $res['rowsAffected'] == 1) {
            
            $session_key = 'user_'.$res['result'][0]->Customer_Id;
            $_SESSION[$session_key] = $res['result'][0];
            return true;
        }
        return false;
    }
    public function checklogin() {

        if($_SESSION['login'] == false ) {
            header("location:login.php");
        }
    }
}
?>
