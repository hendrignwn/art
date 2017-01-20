<?php

use app\helpers\DetailViewHelper;
use app\models\Team;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Team */
?>
<div class="team-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name',
            'last_name',
            'professional',
            [
                'attribute' => 'photo',
                'value' => $model->getPhotoUrlHtml(),
                'format' => 'raw',
            ],
            'social_account',
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
