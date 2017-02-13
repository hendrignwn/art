<?php

namespace app\controllers;

use app\models\Page;
use yii\web\NotFoundHttpException;

/**
 * PageController
 * 
 * @author Hendri <hendri.gnw@gmail.com>
 */
class PageController extends BaseController
{
    public function actionIndex($slug = '')
    {
        $page = Page::findOne([
            'slug' => $slug,
            'status' => Page::STATUS_ACTIVE,
            'category' => Page::CATEGORY_FULL,
        ]);
        
        if (!$page) {
            throw new NotFoundHttpException('Sorry, Page is not found.');
        }
        
        return $this->render('index', [
            'model' => $page
        ]);
    }
}
