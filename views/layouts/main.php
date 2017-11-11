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
    <link href="https://fonts.googleapis.com/css?family=Arsenal:400,700|Source+Sans+Pro:400,700|Oswald" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="loader-wrapper">
    <div id="fountainG">
        <div id="fountainG_1" class="fountainG"></div>
        <div id="fountainG_2" class="fountainG"></div>
        <div id="fountainG_3" class="fountainG"></div>
        <div id="fountainG_4" class="fountainG"></div>
        <div id="fountainG_5" class="fountainG"></div>
        <div id="fountainG_6" class="fountainG"></div>
        <div id="fountainG_7" class="fountainG"></div>
        <div id="fountainG_8" class="fountainG"></div>
    </div>
</div>
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
        'encodeLabels' => false,
        'items'   => [
            [
                'label' => 'Inicio',
                'url' => ['/site/index'],
                'options' => ['class' => 'list-inline-item'],
            ],
            [
                'label' => 'Productos',
                'url' => ['/site/products'],
                'options' => ['class' => 'list-inline-item'],
            ],
            [
                'label' => 'Galería',
                'url' => ['/site/gallery'],
                'options' => ['class' => 'list-inline-item'],
            ],
            [
                'label' => 'Contacto',
                'url' => ['/site/contact'],
                'options' => ['class' => 'list-inline-item'],
            ],
            [
                'label' => '<i class="fa fa-lg fa-instagram"></i>',
                'url' => 'https://www.instagram.com/tequemucho/',
                'linkOptions' => ['target' => '_blank'],
                'options' => ['class' => 'list-inline-item top-icons'],
            ],
            [
                'label' => '<i class="fa fa-lg fa-twitter"></i>',
                'url' => 'https://twitter.com/tequemucho',
                'linkOptions' => ['target' => '_blank'],
                'options' => ['class' => 'list-inline-item top-icons'],
            ],
            [
                'label' => '<i class="fa fa-lg fa-facebook"></i>',
                'url' => 'https://es-la.facebook.com/Tequemucho/',
                'linkOptions' => ['target' => '_blank'],
                'options' => ['class' => 'list-inline-item top-icons'],
            ],
        ],
    ]);
    NavBar::end();
    ?>
    <?= $content ?>
</div>

<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-6 footer-left">
                    <div class="row">
                        <div class="col-xs-6">
                            <?= Html::img(Yii::getAlias('@web') . '/images/logo-nobg.png', [
                                'class'          => 'img-fluid logo-footer m0a',
                                'data-wow-delay' => '0.5s',
                                'alt'            => Html::encode('Tequeño Mucho'),
                            ]) ?>
                        </div>
                        <div class="col-xs-6 text-left footer-contact">
                            <p><?= Html::encode('+58 212 668 4108') ?></p>
                            <p><?= Html::encode('tequemucho@gmail.com') ?></p>
                            <p><?= Html::encode('¡La historia del tequeño cambió para siempre!') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 footer-right text-center">
                    <h5>¡Síguenos en nuestras redes sociales!</h5>
                    <a class="btn btn-instagram" href="https://www.instagram.com/tequemucho/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a>
                    <a class="btn btn-twitter" href="https://twitter.com/tequemucho" target="_blank"><i class="fa fa-lg fa-twitter"></i></a>
                    <a class="btn btn-facebook" href="https://es-la.facebook.com/Tequemucho/" target="_blank"><i class="fa fa-lg fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-rights">
        <div class="container">
            <p>© <?= date('Y') ?> Tequeño Mucho. Todos los derechos reservados.</p>
            <p>Creado por <a href="https://github.com/JDSDigital" target="_blank">JDSDigital</a></p>
            <p>
                <a href="https://github.com/JDSDigital" target="_blank">
                    <?= Html::img(Yii::getAlias('@web') . '/images/GitHub-Mark-Light-32px.png') ?>
                </a>
            </p>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
