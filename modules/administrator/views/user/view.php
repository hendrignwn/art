<?php

use app\helpers\DetailViewHelper;
use app\models\User;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model User */
?>
<div class="user-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'email:email',
            'username',
            'password_hash',
            'auth_key',
            'last_login',
            'join_at',
            'blocked_at',
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
