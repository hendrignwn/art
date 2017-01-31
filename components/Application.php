<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;

use app\models\Config;
use yii\helpers\ArrayHelper;

/**
 * Description of Application
 *
 * @author Hendri
 */
class Application extends \yii\web\Application
{
	public function init() {
		parent::init();
		
		$this->name = Config::getAppName();
		
		return true;
	}
    
    public function run() 
    {
        $configs = Config::getByNames([
            'credential_googlemap_api',
            'map_location_latitude',
            'map_location_longitude',
            'map_marker_description',
        ]);
        $configs['map_location_latitude'] = (float) $configs['map_location_latitude'];
        $configs['map_location_longitude'] = (float) $configs['map_location_longitude'];

        $this->params = ArrayHelper::merge($this->params, $configs);
        
        return parent::run();
    }
}
