<?php

namespace app\controllers;

use app\models\Service;

/**
 * ServiceController
 * 
 * @author Hendri <hendri.gnw@gmail.com>
 */
class ServiceController extends BaseController
{
    public function actionIndex()
    {
        $services = Service::find()->actived()->all();
        
        return $this->render('index', [
            'services' => $services
        ]);
    }
}
