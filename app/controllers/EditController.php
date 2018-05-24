<?php

namespace app\controllers;

use app\models\CvModel;
use app\IdGet;


class EditController extends Controller

{
    public function actionUser($id)
    {
        $a = new IdGet();
        $b = $a->getDataId();
        if (!$b) {
            return $this->view->render('edit/list', [
                'parts' => new CvModel(),
                $this->title = "Users"
            ]);
        } else
            return $this->view->render('user/show', [
                'parts' => new CvModel(),
                $this->title = "User"
            ]);

    }
}