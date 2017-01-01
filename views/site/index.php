<?php

use app\models\Config;
use app\widgets\AboutWidget;
use app\widgets\BannerWidget;
use app\widgets\BlogUpdatedWidget;
use app\widgets\ContactUsWidget;
use app\widgets\CounterWidget;
use app\widgets\FooterWidget;
use app\widgets\NavbarWidget;
use app\widgets\PortfolioWidget;
use app\widgets\ServiceWidget;
use app\widgets\SubscribeFormWidget;
use app\widgets\TeamWidget;
use yii\web\View;

/* @var $this View */

$this->title = Config::getAppMotto();
?>

<?= BannerWidget::widget() ?>

<?= AboutWidget::widget() ?>

<?= CounterWidget::widget() ?>

<?= PortfolioWidget::widget() ?>

<?= ServiceWidget::widget() ?>

<?= TeamWidget::widget() ?>

<?= BlogUpdatedWidget::widget() ?>

<?= ContactUsWidget::widget() ?>