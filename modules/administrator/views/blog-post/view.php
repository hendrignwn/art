<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BlogPost */
?>
<div class="blog-post-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'slug',
            'photo',
            'lead_text:ntext',
            'content:ntext',
            'metakey',
            'metadesc',
            'status',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
            'blog_category_id',
        ],
    ]) ?>

</div>
