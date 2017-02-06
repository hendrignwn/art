<?php

/* @var $this View */
/* @var $content string */

use app\assets\HomeAsset;
use yii\helpers\Html;
use yii\web\View;

HomeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title .' - '. Yii::$app->name) ?></title>
    <?php $this->head() ?>
</head>
<body id="top">
<?php $this->beginBody() ?>

    <?= $this->render('_header') ?>
    
    <?= $this->render('_content', ['content' => $content]) ?>
    
    <?= $this->render('_footer') ?>
    
    <?= $this->render('_preloader') ?>
    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
