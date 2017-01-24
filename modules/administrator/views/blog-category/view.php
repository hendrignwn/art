<?php

use app\helpers\DetailViewHelper;
use app\models\BlogCategory;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model BlogCategory */
?>
<div class="blog-category-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'slug',
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
