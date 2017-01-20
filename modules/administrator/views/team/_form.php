<?php

use app\models\Team;
use app\widgets\CKEditor;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Team */
/* @var $form ActiveForm */
?>

<div class="team-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data',
        ]
    ]); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'professional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photoFile')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'social_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'enableKCFinder' => false,
        'clientOptions' => [
            'row' => 6,
        ],
    ]); ?>

    <?php
    $status = Team::statusLabels();
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
