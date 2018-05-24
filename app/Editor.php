<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 23.05.2018
 * Time: 13:43
 */

namespace app;

use PDO;
class Editor
{

    public function editPersonal($personalId, $data)
    {

        try {
            $dbh = new PDO('mysql: host=localhost; dbname=DBP', 'root', '');
            $query = $dbh->prepare('UPDATE personal SET name =:name, email = :email, phone = :phone, addresses = :addresses WHERE 
                id = :personalId');
            $query->bindValue(':name', $data['name']);
            $query->bindValue(':email', $data['email']);
            $query->bindValue(':phone', $data['phone']);
            $query->bindValue(':addresses', $data['addresses']);
            $query->bindValue(':personalId', $personalId, PDO::PARAM_INT);

            $query->execute();
        } catch
        (PDOException $e) {
        }

    }
    public function editEducation($personalId, $data)
    {

        try {
            $dbh = new PDO('mysql: host=localhost; dbname=DBP', 'root', '');
            $query = $dbh->prepare('UPDATE education SET uni =:uni, period = :periodUni, specialty = :specialty WHERE 
                id = :personalId');
            $query->bindValue(':uni', $data['uni']);
            $query->bindValue(':periodUni', $data['periodUni']);
            $query->bindValue(':specialty', $data['specialty']);
            $query->bindValue(':personalId', $personalId, PDO::PARAM_INT);

            $query->execute();
        } catch
        (PDOException $e) {
        }

    }
    public function editExperience($personalId, $data)
    {

        try {
            $dbh = new PDO('mysql: host=localhost; dbname=DBP', 'root', '');
            $query = $dbh->prepare('UPDATE education SET company =:company, period = :companyperiod, position = :position WHERE 
                id = :personalId');
            $query->bindValue(':company', $data['company']);
            $query->bindValue(':companyperiod', $data['companyperiod']);
            $query->bindValue(':position', $data['position']);
            $query->bindValue(':personalId', $personalId, PDO::PARAM_INT);
            $query->execute();
        } catch
        (PDOException $e) {
        }

    }
    public function editSkills($personalId, $data)
    {

        try {
            $dbh = new PDO('mysql: host=localhost; dbname=DBP', 'root', '');
            $query = $dbh->prepare('UPDATE education SET data =:dataskills WHERE 
                id = :personalId');
            $query->bindValue(':dataskills', $data['dataskills']);
            $query->bindValue(':personalId', $personalId, PDO::PARAM_INT);
            $query->execute();
        } catch
        (PDOException $e) {
        }

    }
    public function editInterests($personalId, $data)
    {

        try {
            $dbh = new PDO('mysql: host=localhost; dbname=DBP', 'root', '');
            $query = $dbh->prepare('UPDATE interests SET data =:dataint WHERE 
                id = :personalId');
            $query->bindValue(':dataint', $data['dataint']);
            $query->bindValue(':personalId', $personalId, PDO::PARAM_INT);
            $query->execute();
        } catch
        (PDOException $e) {
        }

    }

}
