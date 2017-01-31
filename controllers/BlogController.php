<?php

namespace app\controllers;

use app\models\BlogPost;
use yii\data\Pagination;

/**
 * BlogController
 * 
 * @author Hendri <hendri.gnw@gmail.com>
 */
class BlogController extends BaseController
{
    /**
     * displays listing blog
     * 
     * @return string
     */
    public function actionIndex()
    {
        $params = [
            'result' => 'query',
        ];

        $query = BlogPost::getSearch($params);

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=>1]);
        $blogPosts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        return $this->render('index', [
            'blogPosts' => $blogPosts,
            'pages' => $pages,
        ]);
    }
    
    /**
     * displays blog detail
     * 
     * @param type $year d+ {4}
     * @param type $month d+ {2}
     * @param type $slug w+
     * @return type
     */
    public function actionDetail($year, $month, $slug)
    {
        return $this->render('detail', []);
    }
    
    /**
     * displays listing blog by category
     * 
     * @param type $slug w+
     * @return type
     */
    public function actionCategory($slug)
    {
        return $this->render('category', []);
    }
    
    /**
     * displays listing blog by tag
     * 
     * @param type $slug w+
     * @return type
     */
    public function actionTag($slug)
    {
        return $this->render('tag', []);
    }
}
