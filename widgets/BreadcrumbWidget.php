<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

/**
 * Description of BreadcrumbWidget
 *
 * @author Hendri <hendri.gnw@gmail.com>
 */
class BreadcrumbWidget extends \yii\bootstrap\Widget
{
    public $title = 'No Header Title';
    
    public function run()
    {
        return $this->render('breadcrumb', [
            'title' => $this->title,
        ]);
    }
}
