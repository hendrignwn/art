<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use yii\base\Widget;

/**
 * Description of TestimonialWidget
 *
 * @author Hendri <hendri.gnw@gmail.com>
 */
class TestimonialWidget extends Widget
{
    public function run()
    {
        return $this->render('testimonial', [
            'testimonials' => $this->getData(),
        ]);
    }
    
    public function getData()
    {
        $query = \app\models\Testimonial::find()->actived()->all();
        
        return $query;
    }
}
