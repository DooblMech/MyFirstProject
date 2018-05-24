<?php
namespace app\controllers;


class HomeController extends Controller
{
    public function actionIndex()
    {
        return $this->view->render('home/index', [
            $this->title = "Home"
        ]);
    }
}