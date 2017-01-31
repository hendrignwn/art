<?php

use app\models\Config;
use app\widgets\ContactUsWidget;


$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;

/** SEO */
$this->registerMetaTag([
    'http-equiv' => 'Content-Type',
    'content' => 'text/html; charset=utf-8'
]);
$this->registerLinkAlternate();
$this->registerLinkCanonical();
$this->registerMetaTitle();
$this->registerMetaKeywords(Config::getAppMetaKey());
$this->registerMetaDescription(Config::getAppMetaDescription());
$this->registerMetaTag([
    'name' => 'robots',
    'content' => 'noindex,nofollow',
]);
$socialMedia = [
    'title' => $this->title .' - '. Yii::$app->name,
    'description' => Config::getAppMetaDescription(),
];
$this->registerMetaSocialMedia($socialMedia);

?>

<?= ContactUsWidget::widget(['model' => $model]) ?>

<?= app\widgets\GoogleMapWidget::widget() ?>