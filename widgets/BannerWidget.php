<?php

namespace app\widgets;

/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * @author Hendri <hendri.gnw@gmail.com>
 */
class BannerWidget extends \yii\bootstrap\Widget
{
    public $category = 1;
    
    public function run()
    {
        return $this->render('banner');
    }
}
