<?php

use app\helpers\DetailViewHelper;
use app\models\Client;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Client */
?>
<div class="client-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'website',
            [
                'attribute' => 'photo',
                'value' => $model->getPhotoUrlHtml(),
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
