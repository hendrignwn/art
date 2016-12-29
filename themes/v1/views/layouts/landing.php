<?php

/* @var $this View */
/* @var $content string */

use app\assets\LandingAsset;
use app\models\Config;
use yii\helpers\Html;
use yii\web\View;

LandingAsset::register($this);

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
<body data-spy="scroll" data-target=".navbar-collapse">
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
    
    <?= $content ?>
    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
