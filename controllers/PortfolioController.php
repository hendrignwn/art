<?php

namespace app\controllers;

use app\models\Portfolio;
use yii\data\Pagination;

/**
 * PortfolioController
 * 
 * @author Hendri <hendri.gnw@gmail.com>
 */
class PortfolioController extends BaseController
{
    public function actionIndex()
    {
        $query = Portfolio::find()->actived()->orderCreatedAt();

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=>9]);
        $portfolios = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        return $this->render('index', [
            'portfolios' => $portfolios,
            'pages' => $pages,
        ]);
    }
    
    public function actionDetail($slug)
    {
        $portfolio = Portfolio::findOne([
            'slug' => $slug,
            'status' => Portfolio::STATUS_ACTIVE,
        ]);
        
        return $this->render('detail', [
            'model' => $portfolio
        ]);
    }
}
