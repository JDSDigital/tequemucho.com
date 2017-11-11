<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$img1 = Yii::getAlias('@web') . '/images/slider/jumbo/1.jpg';
$img2 = Yii::getAlias('@web') . '/images/slider/jumbo/2.jpg';
$this->title = 'Tequeño Mucho';
?>
<!--<div class="parallax"></div>-->
<!--Carousel Wrapper-->
<div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators m0a p20">
        <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-3" data-slide-to="1"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="carousel-item carousel-item-1 active view hm-black-light carousel-index" style="background-image: url('<?= $img1 ?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">
                <ul class="animated fadeInUp col-md-12">
                    <li>
                        <?= Html::img(Yii::getAlias('@web') . '/images/logo-nobg.png', [
                            'class'          => 'wow lazy flipInX img-fluid m0a',
                            'data-wow-delay' => '0.5s',
                            'alt'            => Html::encode('Tequeño Mucho'),
                        ]) ?>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!-- /.First slide -->

        <!-- Second slide -->
        <div class="carousel-item carousel-item-2 view hm-black-light carousel-index" style="background-image: url('<?= $img2 ?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">
                <ul class="animated fadeInUp col-md-12">
                    <li>
                        <h1 class="h1-responsive flex-item"><?= Html::encode('Ingredientes 100% Naturales') ?></h1>
                    </li><li>
                        <h2 class="flex-item"><?= Html::encode('Tequeños de Masas y Rellenos Especiales') ?></h2>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!-- /.Second slide -->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"><?= Html::encode('Anterior') ?></span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"><?= Html::encode('Siguiente') ?></span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<div class="container">
    <div class="site-index">
        <div class="body-content">

            <div class="row justify-content-center">
                <h1 class="wow fadeIn lazy"><?= Html::encode('Tequeño Mucho') ?></h1>
            </div>
            <div class="row">
                <h4 class="wow fadeIn lazy text-center" style="margin: 20px 0">
                    <?= Html::encode('En Tequeño Mucho nos dedicamos a elaborar los mas deliciosos tequeños, preparados a la perfección con masas especiales de ingredientes 100% naturales, sin colorantes, conservantes ni sabores artificiales. Para brindarte a ti la mejor experiencia de sabor en cualquier ocasión.') ?>
                </h4>
            </div>
            <div class="row justify-content-center">
                <div class="view hm-zoom">
                    <?= Html::img(Yii::getAlias('@web') . '/images/03.jpg', [
                        'class'          => 'wow zoomInUp lazy img-fluid m20',
                        'data-wow-delay' => '0.5s',
                        'alt'            => Html::encode('Tequeño Mucho'),
                    ]) ?>
                    <a href="<?= Yii::getAlias('@web') . '/images/03.jpg' ?>" data-fancybox="index" data-caption="Tequeño Mucho">
                        <div class="mask waves-effect waves-light"></div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <h4 class="wow fadeIn lazy text-center" style="margin: 20px 0">
                    <?= Html::encode('Sean fiestas, reuniones, matrimonios o divorcios nuestros tequeños le darán un toque distinguido y especial a tus eventos.') ?>
                </h4>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="view hm-zoom">
                        <?= Html::img(Yii::getAlias('@web') . '/images/01.jpg', [
                            'class'          => 'wow fadeInLeft lazy img-fluid m20',
                            'data-wow-delay' => '0.5s',
                            'alt'            => Html::encode('Tequeño Mucho'),
                        ]) ?>
                        <a href="<?= Yii::getAlias('@web') . '/images/01.jpg' ?>" data-fancybox="index" data-caption="Tequeño Mucho">
                            <div class="mask waves-effect waves-light"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="view hm-zoom">
                        <?= Html::img(Yii::getAlias('@web') . '/images/02.jpg', [
                            'class'          => 'wow fadeInRight lazy img-fluid m20',
                            'data-wow-delay' => '0.5s',
                            'alt'            => Html::encode('Tequeño Mucho'),
                        ]) ?>
                        <a href="<?= Yii::getAlias('@web') . '/images/02.jpg' ?>" data-fancybox="index" data-caption="Tequeño Mucho">
                            <div class="mask waves-effect waves-light"></div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
