<?php

namespace app\models;

use app\Config;

class User
{
    private $id;

    private $name;

    /**
     * User constructor.
     * @param $id
     */
    public function __construct($id = null)
    {
        if ($id) {
           $users = Config::getInstance()->get('users');
           if(isset($users[$id])) {
               $this->name = $users[$id]['name'];
               $this->id = $id;
           }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}