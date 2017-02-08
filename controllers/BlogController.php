<?php

namespace app\controllers;

use app\models\BlogCategory;
use app\models\BlogPost;
use app\models\BlogTag;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

/**
 * BlogController
 * 
 * @author Hendri <hendri.gnw@gmail.com>
 */
class BlogController extends BaseController
{
    /**
     * displays listing blog by search
     * 
     * @return string
     */
    public function actionSearch()
    {
        $get = \Yii::$app->request->get('query');
        $params = [
            'result' => 'query',
            'search' => [
                'post_title' => $get,
                'content' => $get,
                'lead_text' => $get,
                'category' => $get,
            ]
        ];

        $query = BlogPost::getSearch($params);
        
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=>1]);
        $blogPosts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        return $this->render('search', [
            'blogPosts' => $blogPosts,
            'pages' => $pages,
        ]);
    }
    
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
        $postDetail = BlogPost::findOne([
            'slug' => $slug,
            'status' => BlogPost::STATUS_ACTIVE
        ]);
        
        return $this->render('detail', [
            'postDetail' => $postDetail,
        ]);
    }
    
    /**
     * displays listing blog by category
     * 
     * @param type $slug w+
     * @return type
     */
    public function actionCategory($slug)
    {
        $category = BlogCategory::findOne(['slug' => $slug, 'status' => BlogCategory::STATUS_ACTIVE]);
        if (!$category) {
            throw new NotFoundHttpException('Page is not found.');
        }
        
        $params = [
            'result' => 'query',
            'category' => $category->id,
        ];

        $query = BlogPost::getSearch($params);

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=>1]);
        $blogPosts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        return $this->render('category', [
            'blogPosts' => $blogPosts,
            'pages' => $pages,
            'blogCategory' => $category,
        ]);
    }
    
    /**
     * displays listing blog by tag
     * 
     * @param type $slug w+
     * @return type
     */
    public function actionTag($slug)
    {
        $tag = BlogTag::findOne(['slug' => $slug]);
        if (!$tag) {
            throw new NotFoundHttpException('Page is not found.');
        }
        
        $params = [
            'result' => 'query',
            'tag' => $tag->id,
        ];

        $query = BlogPost::getSearch($params);

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=>1]);
        $blogPosts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        return $this->render('tag', [
            'blogPosts' => $blogPosts,
            'pages' => $pages,
            'blogTag' => $tag,
        ]);
    }
}
