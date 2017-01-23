<?php

use app\models\Menu;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Menu */
/* @var $form ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $parents =ArrayHelper::map(Menu::find()->actived()->all(), 'id', 'categoryWithName');
    $parentOptions = ['data' => $parents, 'pluginOptions' => ['allowClear' => true], 'options' => ['prompt' => 'Choose One']];
    ?>
    <?= $form->field($model, 'parent_id')->widget(Select2::className(), $parentOptions) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_absolute_url')->checkbox() ?>

    <?= $form->field($model, 'option')->textarea(['rows' => 6]) ?>

    <?php
    $categories = Menu::categoryLabels();
    $categoryOptions = ['data' => $categories, 'pluginOptions' => ['allowClear' => true], 'options' => ['prompt' => 'Choose One']];
    ?>
    <?= $form->field($model, 'category')->widget(Select2::className(), $categoryOptions) ?>

    <?php
    $status = Menu::statusLabels();
    $statusOptions = ['data' => $status, 'pluginOptions' => ['allowClear' => true], 'options' => ['prompt' => 'Choose One']];
    ?>
    <?= $form->field($model, 'status')->widget(Select2::className(), $statusOptions) ?>

    <?= $form->field($model, 'order')->textInput() ?>

	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
