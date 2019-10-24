<?php

class user extends pdocrudhandler {
    
    public function __construct() {

        $this->_pdo = $this->connect();
    }

    public function logout() {
        if(isset($_SESSION['login'])){
            $_SESSION['login'] = false;
            unset($_SESSION['userid']);
            unset($_SESSION['password']);
            session_destroy();
        }
    }

    public function signup ($fields = []) {

        $user = $this->insert('user', [
                             'name'         => $fields['name'],
                             'email'        => $fields['email'],
                             'phone'        => $fields['phone'],
                             'password'     => md5($fields['password'])
                         ]);
        if ($user['status'] == 'success' && $user['rowsAffected'] == 1) {
            return true;
        }
        return false;
    }

    public function login($username, $password)
    {

        $res = $this->select('customer', array("*"), "where email = ? and password = ?", array($username, $password));
        if ($res['status'] == 'success' && $res['rowsAffected'] == 1) {
            
            if(session_id() == '' || !isset($_SESSION)) {
                session_start();
            }

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
