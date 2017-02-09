<?php

namespace app\controllers;

use app\models\Portfolio;
use app\models\search\PortfolioSearch;
use Yii;

/**
 * PortfolioController
 * 
 * @author Hendri <hendri.gnw@gmail.com>
 */
class PortfolioController extends BaseController
{
    public function actionIndex()
    {
        $searchModel = new PortfolioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->setPagination(false); //debug
        
        return $this->render('index', [
            'portfolios' => $dataProvider
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
