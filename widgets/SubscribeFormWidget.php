<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use yii\base\Widget;

/**
 * Description of SubscribeFormWidget
 *
 * @author Hendri <hendri.gnw@gmail.com>
 */
class SubscribeFormWidget extends Widget
{
    public $model;
    
    public function run()
    {
        return $this->render('subscribe-form', [
            'model' => $this->model,
        ]);
    }
}
