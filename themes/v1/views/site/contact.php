<?php

use app\models\Config;
use app\widgets\ContactUsWidget;


$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;

$metakey = 'contact ATC, contact Art Techno Corporation';
$metadescription = 'Please call to get more information of ATC or Art Techno Corporation';

/** SEO */
$this->registerMetaTag([
    'http-equiv' => 'Content-Type',
    'content' => 'text/html; charset=utf-8'
]);
$this->registerLinkAlternate();
$this->registerLinkCanonical();
$this->registerMetaTitle();
$this->registerMetaKeywords($metakey);
$this->registerMetaDescription($metadescription);
$this->registerMetaTag(['name' => 'robots',  'content' => 'index,follow']);
$this->registerMetaTag(['name' => 'googlebot',  'content' => 'index,follow']);
$socialMedia = [
    'title' => $metakey,
    'description' => $metadescription,
];
$this->registerMetaSocialMedia($socialMedia);

?>

<?= ContactUsWidget::widget(['model' => $model]) ?>

<?= app\widgets\GoogleMapWidget::widget() ?>