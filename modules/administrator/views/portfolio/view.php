<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Portfolio */
?>
<div class="portfolio-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'service_id',
            'name',
            'slug',
            'completed_on',
            'client',
            'website',
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
