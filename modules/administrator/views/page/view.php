<?php

use app\helpers\DetailViewHelper;
use app\models\Page;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Page */
?>
<div class="page-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'slug',
            'description:ntext',
            'metakey',
            'metadesc',
            [
                'attribute' => 'category',
                'value' => $model->getCategoryLabel(),
                'format' => 'raw',
            ],
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
