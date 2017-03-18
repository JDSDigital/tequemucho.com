<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;


$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Yii::getAlias('@web') . '/favicon.png']);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Arsenal:400,700|Lora:400,700|Source+Sans+Pro:400,700" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img(Yii::getAlias('@web') . '/images/logo-banner.png', ['class' => 'img-fluid logo-banner']),
        'brandUrl'   => Yii::$app->homeUrl,
        'options'    => [
            'class' => 'navbar-inverse navbar-fixed-top fixed-top scrolling-navbar',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right list-inline flex-row navbar-border'],
        'items'   => [
            [
                'label' => 'Inicio',
                'url' => ['/site/index'],
                'options' => ['class' => 'list-inline-item'],
            ],
            [
                'label' => 'Galería',
                'url' => ['/site/gallery'],
                'options' => ['class' => 'list-inline-item'],
            ],
            [
                'label' => 'Quienes Somos',
                'url' => ['/site/about'],
                'options' => ['class' => 'list-inline-item'],
            ],
            [
                'label' => 'Contacto',
                'url' => ['/site/contact'],
                'options' => ['class' => 'list-inline-item'],
            ],
        ],
    ]);
    NavBar::end();
    ?>
    <?= $content ?>
</div>

<footer class="footer">
    <div class="container">
        <p>© <?= date('Y') ?> Tequeño Mucho. Todos los derechos reservados.</p>
		<p>Creado por <a href="https://github.com/JDSDigital" target="_blank">JDSDigital</a></p>
		<p>
            <a href="https://github.com/JDSDigital" target="_blank">
                <?= Html::img(Yii::getAlias('@web') . '/images/GitHub-Mark-Light-32px.png') ?>
            </a>
        </p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
