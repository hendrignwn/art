<?php

use app\models\Config;
use app\models\Contact;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Contact */
/* @var $form ActiveForm */
?>

<div class="contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
	$titleOptions = ['data'=> Config::getTitles(), 'pluginOptions'=>['allowClear'=>true], 'options'=>['prompt'=>'Choose One']];	
	?>
    <?= $form->field($model, 'title_id')->widget(Select2::className(), $titleOptions) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php
	$status = Contact::statusLabels();
	$statusOptions = ['data'=>$status, 'pluginOptions'=>['allowClear'=>true], 'options'=>['prompt'=>'Choose One']];	
	?>
    <?= $form->field($model, 'status')->widget(Select2::className(), $statusOptions) ?>
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
