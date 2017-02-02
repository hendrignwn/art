<?php

use app\helpers\DetailViewHelper;
use app\models\Portfolio;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Portfolio */
?>
<div class="portfolio-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'service_id',
                'value' => $model->service ? $model->service->name : $model->service_id,
            ],
            'name',
            'slug',
            'completed_on',
            'technology',
            'client',
            'website',
            'description:ntext',
            'metakey',
            'metadesc',
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
