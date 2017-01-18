<?php

use app\helpers\DetailViewHelper;
use app\models\Contact;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Contact */
?>
<div class="contact-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'title_id',
                'value' => $model->title,
            ],
            'first_name',
            'last_name',
            'email:email',
            'phone',
            'subject',
            'description:ntext',
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
