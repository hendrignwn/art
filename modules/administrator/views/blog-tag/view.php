<?php

use app\helpers\DetailViewHelper;
use app\models\BlogTag;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model BlogTag */
?>
<div class="blog-tag-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'created_at',
            'updated_at',
            DetailViewHelper::author($model, 'created_by'),
            DetailViewHelper::author($model, 'updated_by'),
        ],
    ]) ?>

</div>
