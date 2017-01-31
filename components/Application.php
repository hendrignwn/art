<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;

use app\models\Config;

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
}
