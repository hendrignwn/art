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
 * Description of ServiceWidget
 *
 * @author Hendri <hendri.gnw@gmail.com>
 */
class ServiceWidget extends Widget
{
    public function run()
    {
        return $this->render('service', [
            'categories' => $this->getCategories(),
            'services' => $this->getServices(),
        ]);
    }
    
    private function getCategories()
    {
        $abouts = $this->getServices();
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
    
    private function getServices()
    {
        $query = PageStatic::find()
                ->where(['type'=> PageStatic::TYPE_SERVICE])
                ->ordered()
                ->active()
                ->all();
        
        return $query;
    }
}
