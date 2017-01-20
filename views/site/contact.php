<?php

/* @var $this View */
/* @var $form ActiveForm */
/* @var $model ContactForm */

use app\models\ContactForm;
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
        <?= kartik\social\Disqus::widget(['settings'=>['title'=>"os", 'identifier'=>'id', 'url'=>'http://www.atc.co.id/sd/']]) ?>
<!--        <div id="disqus_thread"></div>
        <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        
        var disqus_config = function () {
        this.page.url = 'http://www.atc.co.id/page/testss';  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = 'ids'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = '//hendrigunawan.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>-->
                                

    <?php endif; ?>
</div>
