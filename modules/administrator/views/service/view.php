<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Service */
?>
<div class="service-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'slug',
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
