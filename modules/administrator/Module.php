<?php

namespace app\modules\administrator;

use app\models\Config;
use Yii;
use yii\base\Module as BaseModule;
use yii\helpers\ArrayHelper;

/**
 * administrator module definition class
 */
class Module extends BaseModule
{
    public $layout = '@app/modules/administrator/views/layouts/main';
    
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\administrator\controllers';

    /**
	 * url without validation isGuest
	 * 
	 * @var $publicRoute
	 */
	protected $publicRoute;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
		
		 $this->publicRoute = Config::getAdministratorPublicUrl();
		
		/** error handler for module administrator */
		Yii::$app->errorHandler->errorAction = 'administrator/default/error';
        
        /** set login url for administrator login */
        Yii::$app->setComponents(ArrayHelper::merge(Yii::$app->getComponents(), [
            'user' => [
                'loginUrl' => ['administrator/default/login']
            ]
        ]));
		
		/** checkIsLogin */
		$this->checkIsLogin();
    }
	
	/**
	 * check is login, if identity is null, then login required
	 */
	protected function checkIsLogin()
	{
		$route = Yii::$app->getRequest()->getUrl();
		if (
			(Yii::$app->user->getIsGuest()) && 
			(!in_array($route, $this->publicRoute))
		) {
			Yii::$app->requestedRoute = 'administrator';
            Yii::$app->user->loginRequired();
        }
	}
}
