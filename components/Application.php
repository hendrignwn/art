<?php

namespace app\components;

use Yii;

/**
 * Class Application that extends from [[\yii\web\Application]] to further customize Yii application.
 *
 */
class Application extends \yii\web\Application
{
    public function run()
    {
//        $settings = Setting::getByNames([
//            'setting_name_in_db',
//        ]);
//        $settings['developers_email'] = explode(',', $settings['setting_name_in_db']);
//
//        $this->params = ArrayHelper::merge($this->params, $settings);

        return parent::run();
    }
}