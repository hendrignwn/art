<?php

/* @var $this View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
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
<body id="top" class="has-header-search">
<?php $this->beginBody() ?>

    <?= $this->render('_header') ?>
    
    <!--page title start-->
    <section class="page-title page-title-center cover-3 padding-top-220 padding-bottom-120 overlay purple-5 fixed-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="white-text font-40 text-bold"><?= $this->title ?></h2>
                    <?= Breadcrumbs::widget([
                        'tag' => 'ol',
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                </div>
            </div>
        </div>
    </section>
    <!--page title end-->
    
    <?= $this->render('_content', ['content' => $content]) ?>
    
    <?= $this->render('_footer') ?>
    
    <?= $this->render('_preloader') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
