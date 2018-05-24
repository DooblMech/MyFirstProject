<?php
namespace app\controllers;

class NotFoundController extends Controller
{

    public function action404()
    {
        $this->view->render('404/404');
    }
}