<?php

/* @var $this View */
/* @var $content string */

use app\assets\AppAsset;
use app\models\Config;
use app\widgets\BreadcrumbWidget;
use app\widgets\FooterWidget;
use app\widgets\NavbarWidget;
use app\widgets\SubscribeFormWidget;
use yii\helpers\Html;
use yii\web\View;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title . ' - ' . Config::getAppName()) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <!-- Preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div><!--End off Preloader -->
   
    
    <div class="culmn">
        <?= NavbarWidget::widget() ?>
        <?= BreadcrumbWidget::widget(['title'=>$this->title]) ?> 
        <div class="container padding-bottom-60">
            <?= $content ?>
        </div>
        <?= SubscribeFormWidget::widget() ?>
        <?= FooterWidget::widget() ?>
    </div>
    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
