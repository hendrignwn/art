<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Page */
?>
<div class="page-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'slug',
            'category',
            'description:ntext',
            'metakey',
            'metadesc',
            'status',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
