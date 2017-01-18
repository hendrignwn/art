<?php

use app\helpers\FormatConverter;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <?php if (!Yii::$app->user->isGuest) { ?>
				<li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-user-o"></i>
                        <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
							<i class="fa fa-user-o fa-5x" style="color:#fff;"></i>

                            <p>
                                <?= Yii::$app->user->identity->email ?>
								<small><?= Yii::t('app', 'Join since') ?>: <?= FormatConverter::indoDateFormat(Yii::$app->user->identity->join_at, '%B, %Y') ?></small>
                                <small><?= Yii::t('app', 'Last Login') ?>: <?= FormatConverter::dateFormat(Yii::$app->user->identity->last_login, 'd M Y H:i:s') ?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                               <?= Html::a(
									Yii::t('app.menu', 'Sign out'),
									['default/logout'],
									['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
								) ?>
                            </div>
                        </li>
                    </ul>
                </li>
				<?php } ?>
                
            </ul>
        </div>
    </nav>
</header>
