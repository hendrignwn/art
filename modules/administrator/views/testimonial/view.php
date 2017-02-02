<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Testimonial */
?>
<div class="testimonial-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description',
            'professional',
            'status',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
