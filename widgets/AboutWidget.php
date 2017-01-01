<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use app\models\Category;
use app\models\PageStatic;
use yii\bootstrap\Widget;

/**
 * Description of AboutWidget
 *
 * @author Hendri <hendri.gnw@gmail.com>
 */
class AboutWidget extends Widget
{
    public function run()
    {
        return $this->render('about', [
            'categories' => $this->getCategories(),
            'abouts' => $this->getAbouts(),
        ]);
    }
    
    private function getCategories()
    {
        $abouts = $this->getAbouts();
        $category = [];
        foreach($abouts as $about) :
            $category[] = $about->category_id;
        endforeach;
        
        $query = Category::find()
                ->select('name')
                ->andWhere(['in', 'id', $category])
                ->ordered()
                ->active()
                ->indexBy('slug')
                ->column();
        
        return $query;
    }
    
    private function getAbouts()
    {
        $query = PageStatic::find()
                ->where(['type'=> PageStatic::TYPE_ABOUT])
                ->ordered()
                ->active()
                ->all();
        
        return $query;
    }
}
