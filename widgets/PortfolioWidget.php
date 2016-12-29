<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

/**
 * Description of PortfolioWidget
 *
 * @author Hendri <hendri.gnw@gmail.com>
 */
class PortfolioWidget extends \yii\bootstrap\Widget
{
    public function run()
    {
        return $this->render('portfolio');
    }
}
