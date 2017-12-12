<?php

use app\assets\HomeAsset;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $content string */

HomeAsset::register($this);
$this->registerJs("(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92397862-1', 'auto');
  ga('send', 'pageview');", View::POS_END, 'google-analytic');
Yii::$app->name = Yii::$app->name;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= app\helpers\Url::to('favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="<?= app\helpers\Url::to('favicon.ico') ?>" type="image/x-icon">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name . ' | ' . $this->title) ?></title>
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
