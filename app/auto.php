<?php
namespace app;
class auto
{

    public function setLogin($log)
    {

        if (isset($log)) {
            $_SESSION['login'] = $log;
        }
    }

    public function setPass($pass)
    {

        if (isset($pass)) {
            $_SESSION['password'] = $pass;
        }
    }
    public function logout()
    {
        unset($_SESSION['TOKEN']);
        session_destroy();
    }

}