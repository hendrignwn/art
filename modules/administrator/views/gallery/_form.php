<?php

use app\models\Gallery;
use app\models\Portfolio;
use app\widgets\CKEditor;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Gallery */
/* @var $form ActiveForm */
?>

<div class="gallery-form">

    <?php $form = ActiveForm::begin([
		'options' => [
            'enctype' => 'multipart/form-data',
        ]
	]); ?>

    <?php
    $portfolios = ArrayHelper::map(Portfolio::find()->actived()->all(), 'id', 'name');
    $portfolioOptions = ['data' => $portfolios, 'pluginOptions' => ['allowClear' => true], 'options' => ['prompt' => 'Choose One']];
    ?>
    <?= $form->field($model, 'portfolio_id')->widget(Select2::className(), $portfolioOptions) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photoFile')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'enableKCFinder' => false,
        'clientOptions' => [
            'row' => 6,
        ],
    ]); ?>

    <?= $form->field($model, 'metakey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metadesc')->textarea(['maxlength' => true]) ?>

    <?php
    $status = Gallery::statusLabels();
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
