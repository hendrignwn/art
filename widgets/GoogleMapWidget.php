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
        //var_dump(\Yii::$app->params);die;
        return $this->render('google-map', [
            'latitude' => $this->getLatitude(),
            'longitude' => $this->getLongitude(),
            'markerDescription' => $this->getMarkerDescription(),
        ]);
    }
    
    private function getLatitude()
    {
        return \Yii::$app->params['map_location_latitude'];
    }
    
    private function getLongitude()
    {
        return \Yii::$app->params['map_location_longitude'];
    }
    
    private function getMarkerDescription()
    {
        return \Yii::$app->params['map_marker_description'];
    }
}
