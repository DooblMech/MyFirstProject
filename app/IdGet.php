<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 23.05.2018
 * Time: 0:19
 */

namespace app;

use app\controllers\Controller;


class IdGet
{
    /** @var array */
    private $pathParts = [];

    /** @var Controller */
    private $controller;

    /** @var string */
    private $action;

    public function __construct()
    {
        $this->pathParts = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($this->pathParts);
    }

    public function getData(): array
    {
        return array_slice($this->pathParts, 2);
    }

    public function getDataId()
    {
        $idi = $this->getData();
        $idii = $idi[0];

        return $idii[0];
    }
}