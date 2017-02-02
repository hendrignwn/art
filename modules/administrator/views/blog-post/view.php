<?php

use app\helpers\DetailViewHelper;
use app\models\BlogPost;
use yii\helpers\Inflector;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model BlogPost */
?>
<div class="blog-post-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'slug',
            [
                'attribute' => 'photo',
                'value' => $model->getPhotoUrlHtml(),
                'format' => 'raw',
            ],
            'lead_text:ntext',
            'content:ntext',
            [
                'attribute' => 'blogTag',
                'value' => Inflector::sentence($model->getListBlogPostTags()),
            ],
            'metakey',
            'metadesc',
            [
                'attribute' => 'status',
                'value' => $model->getStatusWithStyle(),
                'format' => 'raw',
            ],
            'created_at',
            'updated_at',
            DetailViewHelper::author($model, 'created_by'),
            DetailViewHelper::author($model, 'updated_by'),
            [
                'attribute' => 'blog_category_id',
                'value' => $model->blogCategory ? $model->blogCategory->name : $model->blog_category_id,
            ],
        ],
    ]) ?>

</div>
