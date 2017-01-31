<?php

namespace app\controllers;

/**
 * ServiceController
 * 
 * @author Hendri <hendri.gnw@gmail.com>
 */
class ServiceController extends \app\controllers\BaseController
{
    public function actionIndex()
    {
        return $this->render('index', []);
    }
}
