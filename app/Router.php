<?php

namespace app;

use app\controllers\Controller;
use app\controllers\NotFoundController;

class Router
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

    public function getController(): Controller
    {
        if (!$this->controller) {
            $this->initController();
        }

        return $this->controller;
    }

    private function initController()
    {
        $controllerName = $this->pathParts[0] ?: 'home';
        $controllerName = ucfirst(strtolower(trim($controllerName)));
        $controllerName .= 'Controller';
        $controllerName = '\app\controllers\\' . $controllerName;

        if (class_exists($controllerName, true)) {
            $view = new View();
            $this->controller = new $controllerName($view);
            $view->setController($this->controller);

        } else {
            $this->initNotFoundRoute();
        }
    }

    public function getAction(): string
    {
        if (!$this->action) {
            $this->initAction();
        }

        return $this->action;
    }

    private function initAction()
    {
        $actionName = $this->pathParts[1] ?? 'index';
        $actionName = ucfirst(strtolower(trim($actionName)));
        $actionName = 'action' . $actionName;

        if (method_exists($this->getController(), $actionName)) {
            $this->action = $actionName;
        } else {
            $this->initNotFoundRoute();
        }
    }

    private function initNotFoundRoute()
    {
        $view = new View();
        $this->controller = new NotFoundController($view);
        $view->setController($this->controller);
        $this->action = 'action404';
    }
}