<?php

namespace app\controllers;

/**
 * PageController
 * 
 * @author Hendri <hendri.gnw@gmail.com>
 */
class PageController extends \app\controllers\BaseController
{
    public function actionIndex($slug = '')
    {
        return $this->render('index', []);
    }
}
