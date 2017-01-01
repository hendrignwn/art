<?php

use yii\widgets\Breadcrumbs;

//var_dump($this->params['breadcrumbs']);die;
?>

<section id="breadcrumb" class="breadcrumb-banner">
    <div class="home-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="main_about_banner main_banner text-center sections">
                <h2><?= $title ?></h2>
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
            </div>
        </div>
    </div>
</section>