<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use app\models\BlogPost;
use yii\jui\Widget;

/**
 * Description of BlogSectionWidget
 *
 * @author Hendri <hendri.gnw@gmail.com>
 */
class BlogSectionWidget extends Widget
{
    public function run()
    {
        return $this->render('blog-section', [
            'blogPosts' => $this->getBlogPosts(),
        ]);
    }
    
    public function getBlogPosts()
    {
        $params = [
            'result' => 'result',
            'limit' => 3,
        ];

        return BlogPost::getSearch($params);
    }
}
