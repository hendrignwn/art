<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* @var $model app\models\Page */
/* @var $this app\components\View */

$this->title = $model->name;
$this->params['breadcrumbs'][] = Yii::t('app', 'Page');
$this->params['breadcrumbs'][] = $this->title;

/** SEO */
$this->registerMetaTag([
    'http-equiv' => 'Content-Type',
    'content' => 'text/html; charset=utf-8'
]);
$this->registerLinkAlternate();
$this->registerLinkCanonical();
$this->registerMetaTitle();
$this->registerMetaKeywords($model->metakey);
$this->registerMetaDescription($model->metadesc);
$this->registerMetaTag([
    'name' => 'robots',
    'content' => 'noindex,nofollow',
]);
$socialMedia = [
    'title' => $this->title .' - '. Yii::$app->name,
    'description' => $model->metadesc,
];
$this->registerMetaSocialMedia($socialMedia);

?>

<section id="<?= $model->slug ?>" class="section-padding">
    <?= $model->description ?>
</section>