<?php

namespace app\controllers;

/**
 * PortfolioController
 * 
 * @author Hendri <hendri.gnw@gmail.com>
 */
class PortfolioController extends \app\controllers\BaseController
{
    public function actionIndex()
    {
        return $this->render('index', []);
    }
    
    public function actionDetail($slug)
    {
        return $this->render('detail', []);
    }
}
