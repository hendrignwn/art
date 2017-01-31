<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* @var $this app\components\View */

$this->title = 'Our Portfolios';
$this->params['breadcrumbs'][] = $this->title;

/** SEO */
$this->registerMetaTag([
    'http-equiv' => 'Content-Type',
    'content' => 'text/html; charset=utf-8'
]);
$this->registerLinkAlternate();
$this->registerLinkCanonical();
$this->registerMetaTitle();
$this->registerMetaKeywords($this->title);
$this->registerMetaDescription('This is a portfolios of the Art Techno Corporation, We are work with great heart');
$this->registerMetaTag([
    'name' => 'robots',
    'content' => 'noindex,nofollow',
]);
$socialMedia = [
    'title' => $this->title .' - '. Yii::$app->name,
    'description' => 'This is a portfolios of the Art Techno Corporation',
];
$this->registerMetaSocialMedia($socialMedia);

?>

<?= app\widgets\PortfolioWidget::widget() ?>