<?php
namespace app\controllers;

use app\View;

abstract class Controller
{
    /** @var View */
    protected $view;

    protected $title;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
}