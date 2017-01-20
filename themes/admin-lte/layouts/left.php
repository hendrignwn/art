<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => Yii::t('app.menu', 'Main Menu'), 'options' => ['class' => 'header']],
                    ['label' => Yii::t('app.menu', 'Sign in'), 'icon' => 'fa fa-sign-in', 'url' => ['default/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => Yii::t('app.menu', 'Dashboard'), 'icon' => 'fa fa-dashboard', 'url' => ['default/index']],
                    ['label' => Yii::t('app.menu', 'Contact'), 'icon' => 'fa fa-file-o', 'url' => ['contact/index']],
                    ['label' => Yii::t('app.menu', 'Subscribe'), 'icon' => 'fa fa-users', 'url' => ['subscribe/index']],
                    ['label' => Yii::t('app.menu', 'Page'), 'icon' => 'fa fa-pagelines', 'url' => ['page/index']],
                    ['label' => Yii::t('app.menu', 'Users'), 'icon' => 'fa fa-users', 'url' => ['user/index']],
                    [
                        'label' => Yii::t('app.menu', 'Master'),
                        'icon' => 'fa fa-folder-o',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app.menu', 'Service'), 'icon' => 'fa fa-server', 'url' => ['service/index']],
                            ['label' => Yii::t('app.menu', 'Team'), 'icon' => 'fa fa-id-card', 'url' => ['team/index']],
                            ['label' => Yii::t('app.menu', 'Portfolio'), 'icon' => 'fa fa-server', 'url' => ['portfolio/index']],
                            ['label' => Yii::t('app.menu', 'Gallery'), 'icon' => 'fa fa-picture-o', 'url' => ['gallery/index']],
                            ['label' => Yii::t('app.menu', 'Client'), 'icon' => 'fa fa-users', 'url' => ['client/index']],
                            ['label' => Yii::t('app.menu', 'Banner'), 'icon' => 'fa fa-flag', 'url' => ['banner/index']],
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
