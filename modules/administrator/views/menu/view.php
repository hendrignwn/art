<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Menu */
?>
<div class="menu-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'parent_id',
            'name',
            'url:url',
            'is_absolute_url:url',
            'option:ntext',
            'category',
            'status',
            'order',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
