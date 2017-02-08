<?php

use app\models\User;
use app\models\UserProfile;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model User */
/* @var $profile UserProfile */
/* @var $form ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data',
        ]
    ]); ?>

    <?= $form->field($profile, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($profile, 'proffesional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($profile, 'photoFile')->fileInput(['maxlength' => true]) ?>
    
    <?= $form->field($profile, 'photoBackgroundFile')->fileInput(['maxlength' => true]) ?>
    
    <?= $form->field($profile, 'bio')->textarea(['maxlength' => true]) ?>
    
    <?= $form->field($profile, 'social_facebook')->textInput(['maxlength' => true]) ?>
    <?= $form->field($profile, 'social_twitter')->textInput(['maxlength' => true]) ?>
    <?= $form->field($profile, 'social_linked_in')->textInput(['maxlength' => true]) ?>
    <?= $form->field($profile, 'social_dribbble')->textInput(['maxlength' => true]) ?>
    <?= $form->field($profile, 'social_email')->textInput(['maxlength' => true]) ?>

	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($profile->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $profile->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
