<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Client */
?>
<div class="client-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'website',
            'photo',
            'status',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
