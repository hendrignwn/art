<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use app\models\Service;
use yii\base\Widget;

/**
 * Description of PortfolioWidget
 *
 * @author Hendri <hendri.gnw@gmail.com>
 */
class PortfolioWidget extends Widget
{
    public $portfolios;
    
    public function run()
    {
        return $this->render('portfolio', [
            'portfolios' => $this->portfolios,
            'services' => $this->getMenuServices(),
        ]);
    }
    
    /**
     * returns service
     * 
     * @return array
     */
    protected function getMenuServices()
    {
        return Service::find()->actived()->all();
    }
}
