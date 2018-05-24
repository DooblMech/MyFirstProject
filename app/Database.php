<?php

namespace app;
use PDO;
/**
 * Class Database
 * @package application\models\cv\database
 */
class Database
{
    /**
     * @var null|\PDO
     */
    private $connection = null;

    /**
     * @return null|\PDO
     */

    const TABLE_PERSONAL = 'personal';
    const TABLE_SKILLS = 'skills';
    const TABLE_EXPERIENCE = 'experience';
    const TABLE_EDUCATION = 'education';
    const TABLE_INTERESTS = 'interests';

    public function getConnection()
    {
       if (null === $this->connection) {
            $dbConfig = Config::getInstance()->get('database');
            $dsn = new PDO('mysql: host=localhost; dbname=DBP', 'root', '');

            $this->connection = new \PDO($dsn, $dbConfig['user'], $dbConfig['password']);
        }

        return $this->connection;



    }


    /**
     * @param string $table
     * @return int
     */
    public function clearTable($table)
    {
        return $this->getConnection()->exec("TRUNCATE TABLE {$table}");
    }

    public function __destruct()
    {
        $this->connection = null;
    }
}
