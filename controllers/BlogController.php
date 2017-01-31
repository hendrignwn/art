<?php

namespace app\controllers;

/**
 * BlogController
 * 
 * @author Hendri <hendri.gnw@gmail.com>
 */
class BlogController extends \app\controllers\BaseController
{
    /**
     * show listing blog
     * 
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    /**
     * show blog detail
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
     * show listing blog by category
     * 
     * @param type $slug w+
     * @return type
     */
    public function actionCategory($slug)
    {
        return $this->render('category', []);
    }
    
    /**
     * show listing blog by tag
     * 
     * @param type $name w+
     * @return type
     */
    public function actionTag($name)
    {
        return $this->render('tag', []);
    }
}
