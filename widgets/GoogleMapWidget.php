<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use yii\base\Widget;

/**
 * Description of GoogleMapWidget
 *
 * @author Hendri <hendri.gnw@gmail.com>
 */
class GoogleMapWidget extends Widget
{
    public $model;
    
    public function run()
    {
        return $this->render('google-map', [
            //'model' => $this->model,
        ]);
    }
}
