<?php

use app\helpers\DetailViewHelper;
use app\models\Menu;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Menu */
?>
<div class="menu-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'parent_id',
            'name',
            'url:url',
            'is_absolute_url:boolean',
            'option:ntext',
            [
                'attribute' => 'category',
                'value' => $model->getCategoryLabel(),
            ],
            'order',
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
