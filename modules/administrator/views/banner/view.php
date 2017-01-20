<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Banner */
?>
<div class="banner-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'url:url',
            'is_absolute_url:url',
            'photo',
            'category',
            'description:ntext',
            'status',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
