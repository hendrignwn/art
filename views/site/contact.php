<?php

/* @var $this View */
/* @var $form ActiveForm */
/* @var $model ContactForm */

use app\models\ContactForm;
use iutbay\yii2kcfinder\KCFinderInputWidget;
use stenyo\ckeditor\CKEditor;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\web\View;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>
                
                <?= $form->field($model, 'body')->widget(app\widgets\CKEditor::className(), [
                    'kcfOptions' => [
                        'uploadURL' => '@web/uploads',
                        'uploadDir' => '@app/web/uploads/images',
                        'maxImageWidth' => 100,
                        'maxImageHeight' => 100,
                        'access' => array(
                            'files' => array(
                                'upload' => true,
                                'delete' => true,
                                'copy' => true,
                                'move' => true,
                                'rename' => true
                            ),
                            'dirs' => array(
                                'create' => true,
                                'delete' => true,
                                'rename' => true
                            )
                        ),
                        'types' => array(

                            // (F)CKEditor types
                                'files'   =>  "!pdf",
                                'flash'   =>  "swf",
                                'images'  =>  "*img",

                            // TinyMCE types
                                'file'    =>  "!pdf",
                                'media'   =>  "swf flv avi mpg mpeg qt mov wmv asf rm",
                                'image'   =>  "*img",
                            ),
                    ]
]); ?>

                

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
