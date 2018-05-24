<?php

namespace app;

use PDO;

class ConectJSON
{

    public $msg_info = array();

    public function getTable($table)
    {
        return $this->table = $table;
    }

    public function getPersonal()
    {
        try {
            $dbh = new PDO('mysql: host=localhost; dbname=DBP', 'root', '');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sth = $dbh->query('SELECT * FROM personal');
            $msg_info = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch
        (PDOException $e) {
        }

        return $msg_info;
    }

    public function getEducation()
    {
        try {
            $dbh = new PDO('mysql: host=localhost; dbname=DBP', 'root', '');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sth = $dbh->query('SELECT * FROM education');
            $msg_info = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch
        (PDOException $e) {
        }

        return $msg_info;
    }

    public function getExperience()
    {
        try {
            $dbh = new PDO('mysql: host=localhost; dbname=DBP', 'root', '');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sth = $dbh->query('SELECT * FROM experience ');
            $msg_info = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch
        (PDOException $e) {
        }

        return $msg_info;

    }

    public function getSkills()
    {
        try {
            $dbh = new PDO('mysql: host=localhost; dbname=DBP', 'root', '');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sth = $dbh->query('SELECT * FROM skills');
            $msg_info = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch
        (PDOException $e) {
        }

        return $msg_info;
    }

    public function getInterests()
    {
        try {
            $dbh = new PDO('mysql: host=localhost; dbname=DBP', 'root', '');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sth = $dbh->query('SELECT * FROM interests');
            $msg_info = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch
        (PDOException $e) {
        }

        return $msg_info;
    }

    public function getCompany($id)
    {

        $dat = $this->getExperience();
        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo ucfirst(strtolower(trim($company)));

    }

    public function getCompanyPeriod($id)
    {

        $dat = $this->getExperience();
        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo trim($period);

    }

    public function getPhoto($id)
    {

        $dat = $this->getPersonal();
        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo trim($photo);

    }

    public function getPosition($id)
    {

        $dat = $this->getExperience();
        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo ucfirst(strtolower(trim($position)));

    }

    public function getUni($id)
    {

        $dat = $this->getEducation();
        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo ucfirst(trim($uni));

    }

    public function getPeriodUni($id)
    {

        $dat = $this->getEducation();
        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo(trim($period));


    }

    public function getSpecialty($id)
    {

        $dat = $this->getEducation();
        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo ucfirst(strtolower(trim($specialty)));


    }

    public function getName($id)
    {

        $dat = $this->getPersonal();

        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo ucfirst(trim($name));


    }

    public function getAddresses($id)
    {
        $dat = $this->getPersonal();

        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo ucfirst(strtolower(trim($addresses)));


    }

    public function getPhone($id)
    {

        $dat = $this->getPersonal();

        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo trim($phone);


    }

    public function getEmail($id)
    {

        $dat = $this->getPersonal();

        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo trim($email);

    }

    public function getSkillsData($id)
    {
        $dat = $this->getSkills();
        $a = [];
        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        $a = explode(', ', $data);
        $b = substr_count($data, ', ');
        extract($a);
        for ($i = 0; $i <= $b; $i++) {
            echo "&#8226;";
            echo $a[$i];
            echo "</br>";

        }
        echo "</br>";


    }
    public function getLevel($id)
    {

        $dat = $this->getSkills();
        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo ucfirst(strtolower(trim($level)));

    }
    public function getInterestsData($id)
    {

        $dat = $this->getInterests();
        extract($dat);
        $r = ($dat[$id]);
        extract($r);
        echo ucfirst(strtolower(trim($data)));

    }

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


}

