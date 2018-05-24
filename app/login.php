<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 23.05.2018
 * Time: 8:44
 */

namespace app;

use PDO;

class login
{
    public $msg_info = array();

    public function getUsers()
    {
        try {
            $dbh = new PDO('mysql: host=localhost; dbname=DBP', 'root', '');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sth = $dbh->query('SELECT * FROM users');
            $msg_info = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch
        (PDOException $e) {
        }
        return $msg_info;
    }

    public function checkLogin()
    {
        $login = $_SESSION['login'];
        $pass = $_SESSION['password'];
        $dat = $this->getUsers();

        extract($dat);

        foreach ($dat as $k) {

                if (($login == $k['login']) && ($pass == $k['password'])) {

                    $_SESSION['TOKEN'] = '1';
                    $_SESSION['id'] = $k['id'];
                    break;
                } else  $_SESSION['TOKEN'] = '0';

        }

    }

}
