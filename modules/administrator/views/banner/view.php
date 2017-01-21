<?php

use app\helpers\DetailViewHelper;
use app\models\Banner;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Banner */
?>
<div class="banner-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'url:url',
            'is_absolute_url',
            [
                'attribute' => 'photo',
                'value' => $model->getPhotoUrlHtml(),
                'format' => 'raw',
            ],
            [
                'attribute' => 'category',
                'value' => $model->getCategoryLabel(),
                'format' => 'raw',
            ],
            'description:ntext',
            [
                'attribute' => 'status',
                'value' => $model->getStatusWithStyle(),
                'format' => 'raw',
            ],
            'created_at',
            'updated_at',
            DetailViewHelper::author($model, 'created_by'),
            DetailViewHelper::author($model, 'updated_by'),
        ],
    ]) ?>

</div>
