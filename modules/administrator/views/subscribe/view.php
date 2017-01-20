<?php

use app\helpers\DetailViewHelper;
use app\models\Subscribe;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Subscribe */
?>
<div class="subscribe-view">

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'email:email',
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
    ])
    ?>

</div>
