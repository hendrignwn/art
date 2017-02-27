<?php

use app\models\Menu as Menu2;
use yii\helpers\Html;
use yii\widgets\Menu;

?>

<!--header start-->
<header id="header" class="tt-nav transparent-header">
    <div class="header-sticky light-header ">
        <div class="container">
            <div id="materialize-menu" class="menuzord">
                <!--logo start-->
                <?= Html::a(
                        Html::img(['data/img/logo.png'], ['alt'=>'Logo ATC', 'class'=>'logo-dark']) .
                        Html::img(['data/img/logo-white.png'], ['alt'=>'Logo ATC', 'class'=>'logo-light']),
                        ['/site/index'], 
                        [
                            'class' =>'logo-brand',
                        ]
                    ) ?>
                <!--logo end-->

                <!--mega menu start-->
                <?= Menu::widget([
                    'options' => ['class'=>'menuzord-menu pull-right light'],
                    'submenuTemplate' => '<ul class=\'dropdown\'>{items}</ul>',
                    'items' => (new Menu2())->getMenus(Menu2::CATEGORY_MAIN),
                ]) ?>
            </div>
        </div>
    </div>

</header>
<!--header end-->