<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => Yii::t('app.menu', 'Main Menu'), 'options' => ['class' => 'header']],
                    ['label' => Yii::t('app.menu', 'Dashboard'), 'icon' => 'fa fa-dashboard', 'url' => ['default/index']],
                    ['label' => Yii::t('app.menu', 'Contact'), 'icon' => 'fa fa-file-o', 'url' => ['contact/index']],
                    ['label' => Yii::t('app.menu', 'Sign in'), 'icon' => 'fa fa-sign-in', 'url' => ['default/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => Yii::t('app.menu', 'Master'),
                        'icon' => 'fa fa-folder-o',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app.menu', 'Banner'), 'icon' => 'fa fa-eercast', 'url' => ['banner/index']],
                        ],
                    ],
                    [
                        'label' => Yii::t('app.menu', 'Blog'),
                        'icon' => 'fa fa-folder-o',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app.menu', 'Post'), 'icon' => 'fa fa-plus-square-o', 'url' => ['/gii']],
                            ['label' => Yii::t('app.menu', 'Post Categories'), 'icon' => 'fa fa-reorder', 'url' => ['/gii']],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
