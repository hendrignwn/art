<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Gallery */
?>
<div class="gallery-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'portfolio_id',
            'name',
            'photo',
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
