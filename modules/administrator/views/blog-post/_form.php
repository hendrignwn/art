<?php

use app\models\BlogCategory;
use app\models\BlogPost;
use app\widgets\CKEditor;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model BlogPost */
/* @var $form ActiveForm */
?>

<div class="blog-post-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?php
    $categories = ArrayHelper::map(BlogCategory::find()->actived()->all(), 'id', 'name');
    $categoryOptions = ['data' => $categories, 'pluginOptions' => ['allowClear' => true], 'options' => ['prompt' => 'Choose One']];
    ?>
    <?= $form->field($model, 'blog_category_id')->widget(Select2::className(), $categoryOptions) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'enableKCFinder' => true,
        'clientOptions' => [
            'row' => 6,
        ],
    ]); ?>

    <?= $form->field($model, 'metakey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metadesc')->textarea(['maxlength' => true]) ?>

    <?php
    $status = BlogPost::statusLabels();
    $statusOptions = ['data' => $status, 'pluginOptions' => ['allowClear' => true], 'options' => ['prompt' => 'Choose One']];
    ?>
    <?= $form->field($model, 'status')->widget(Select2::className(), $statusOptions) ?>

	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
