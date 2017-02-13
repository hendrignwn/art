<?php

use app\helpers\DetailViewHelper;
use app\models\ScheduledEmail;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model ScheduledEmail */
?>
<div class="scheduled-email-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category',
            'subject',
            'body:ntext',
            [
                'attribute' => 'photo',
                'value' => $model->getPhotoUrlHtml(),
                'format' => 'raw',
            ],
            'send_date',
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
