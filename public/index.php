<?php
require_once(__DIR__ . '/../bootstrap.php');

session_start();
try {
    $router = new \app\Router();
    call_user_func_array(
        [$router->getController(), $router->getAction()],
        $router->getData()
    );
    $router->getDataId();

} catch (\Exception $e) {
}












