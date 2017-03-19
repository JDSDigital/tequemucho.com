<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$img1 = Yii::getAlias('@web') . '/images/11.jpg';
$img2 = Yii::getAlias('@web') . '/images/03.jpg';
$this->title = 'Tequeño Mucho';
?>
<!--<div class="parallax"></div>-->
<!--Carousel Wrapper-->
<div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
    <!--Indicators-->
    <ol class="carousel-indicators m0a p20">
        <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-3" data-slide-to="1"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="carousel-item carousel-item-1 active view hm-black-light" style="background-image: url('<?= $img1 ?>'); background-repeat: no-repeat center; background-size: cover;">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">
                <ul class="animated fadeInUp col-md-12">
                    <li>
                        <?= Html::img(Yii::getAlias('@web') . '/images/logo-nobg.png', [
                            'class'          => 'wow lazy img-fluid m0a',
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
        <div class="carousel-item carousel-item-2 view hm-black-light" style="background-image: url('<?= $img2 ?>'); background-repeat: no-repeat center; background-size: cover;">

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
                <h1 class="wow fadeIn lazy"><?= Html::encode('Lorem Ipsum') ?></h1>
                <p class="wow fadeIn lazy">
                    <?= Html::encode('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in porttitor urna. Morbi in augue eu odio aliquam consequat. Pellentesque elementum porttitor elementum. Cras semper porta nibh, id efficitur arcu porta eget. Duis sed nulla sodales, aliquet velit vitae, aliquam tortor. Integer auctor convallis mauris eget molestie. Quisque ullamcorper rhoncus urna, aliquet mollis nisl semper sit amet. Aliquam ornare eu sapien eu venenatis. Nam eget libero tincidunt, ultricies mi id, mollis ligula. Nullam in aliquet leo. Nulla in turpis at justo malesuada tincidunt eget in arcu. Quisque efficitur quis nisi vel volutpat. Mauris varius lacus ornare mattis sagittis. Quisque eleifend volutpat mauris. Donec vulputate felis neque, eget ornare augue scelerisque ac.') ?>
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="view hm-zoom">
                    <a href="<?= Yii::getAlias('@web') . '/images/gallery/teque02.jpg' ?>" data-fancybox="index" data-caption="Tequeño Mucho">
                        <?= Html::img(Yii::getAlias('@web') . '/images/gallery/teque02.jpg', [
                            'class'          => 'wow fadeInLeft lazy img-fluid m20',
                            'data-wow-delay' => '0.5s',
                            'alt'            => Html::encode('Tequeño Mucho'),
                        ]) ?>
                    </a>
                </div>
                <div class="view hm-zoom">
                    <a href="<?= Yii::getAlias('@web') . '/images/gallery/teque03.jpg' ?>" data-fancybox="index" data-caption="Tequeño Mucho">
                        <?= Html::img(Yii::getAlias('@web') . '/images/gallery/teque03.jpg', [
                            'class'          => 'wow fadeInRight lazy img-fluid m20',
                            'data-wow-delay' => '0.5s',
                            'alt'            => Html::encode('Tequeño Mucho'),
                        ]) ?>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <p class="wow fadeIn lazy">
                    <?= Html::encode('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in porttitor urna. Morbi in augue eu odio aliquam consequat. Pellentesque elementum porttitor elementum. Cras semper porta nibh, id efficitur arcu porta eget. Duis sed nulla sodales, aliquet velit vitae, aliquam tortor. Integer auctor convallis mauris eget molestie. Quisque ullamcorper rhoncus urna, aliquet mollis nisl semper sit amet. Aliquam ornare eu sapien eu venenatis. Nam eget libero tincidunt, ultricies mi id, mollis ligula. Nullam in aliquet leo. Nulla in turpis at justo malesuada tincidunt eget in arcu. Quisque efficitur quis nisi vel volutpat. Mauris varius lacus ornare mattis sagittis. Quisque eleifend volutpat mauris. Donec vulputate felis neque, eget ornare augue scelerisque ac.') ?>
                </p>
            </div>
        </div>
    </div>
</div>
