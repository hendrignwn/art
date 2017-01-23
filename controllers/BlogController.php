<?php

namespace app\controllers;

class BlogController extends \app\controllers\BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionDetail($year, $month, $slug)
    {
        return $this->render('detail', []);
    }
    
    public function actionCategory($slug)
    {
        return $this->render('category', []);
    }
    
    public function actionTag($slug)
    {
        return $this->render('tag', []);
    }
}
