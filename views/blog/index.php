<?php
/* @var $this yii\web\View */
?>
<h1>blog/index</h1>
<?= \yii\helpers\Html::a('detail', app\helpers\Url::to(['blog/detail', 'year' => date('Y'), 'month' => date('m'), 'slug' => 'test-online'])) ?>
<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
