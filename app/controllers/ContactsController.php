<?php

namespace app\controllers;

class ContactsController extends Controller
{
    public function actionIndex()
    {
        $this->title = 'Our contacts';
        $this->view->render('contacts/index');
    }

}