<?php

namespace app\controllers;

use app\models\CvModel;
use app\IdGet;


class UserController extends Controller
{
    public function actionShow($id)
    {
        $a = new IdGet();
        $b = $a->getDataId();
        if (!$b) {
            return $this->view->render('user/list', [
                'parts' => new CvModel(),
                $this->title = "Users"
            ]);
        } else
            return $this->view->render('user/show', [
                'parts' => new CvModel(),
                $this->title = "User"
            ]);

    }

    public function actionAuth()
    {
        return $this->view->render('user/auth', [
            'parts' => new CvModel(),
            $this->title = "Auth"
        ]);

    }

    public function actionLogout()
    {
        return $this->view->render('user/logout', [
            'parts' => new CvModel(),
            $this->title = "logout"
        ]);

    }

    public function actionEdit($id)
    {
        $a = new IdGet();
        $b = $a->getDataId();
        if (!$b) {
            return $this->view->render('user/list', [
                'parts' => new CvModel(),
                $this->title = "Users"
            ]);
        } elseif ($b == $_SESSION['id']) {
            return $this->view->render('user/index', [
                'parts' => new CvModel(),
                $this->title = "Users"
            ]);
        } elseif ($_SESSION['EDIT'] == 1) {
            return $this->view->render('user/success', [
                'parts' => new CvModel(),
                $this->title = "User"
            ]);}
            else return $this->view->render('user/deny', [
                'parts' => new CvModel(),
                $this->title = "User"
            ]);
    }
    public function action404()
    {
        $this->view->render('404/404');
    }



}