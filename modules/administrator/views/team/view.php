<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Team */
?>
<div class="team-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name',
            'last_name',
            'professional',
            'photo',
            'social_account',
            'description:ntext',
            'status',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
