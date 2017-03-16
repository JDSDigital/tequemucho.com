<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


$this->title = 'Tequeño Mucho';
?>
<div class="parallax"></div>
<div class="container">
    <div class="site-index">
        <div class="body-content">
            <div class="row justify-content-center">
                <?= Html::img(Yii::getAlias('@web') . '/images/logo.png', [
                    'class'          => 'wow fadeIn lazy img-fluid',
                    'data-wow-delay' => '0.5s',
                    'alt'            => Html::encode('Tequeño Mucho'),
                ]) ?>
            </div>
            <div class="row justify-content-center">
                <h1 class="wow fadeIn lazy"><?= Html::encode('Lorem Ipsum') ?></h1>
                <p class="wow fadeIn lazy">
                    <?= Html::encode('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in porttitor urna. Morbi in augue eu odio aliquam consequat. Pellentesque elementum porttitor elementum. Cras semper porta nibh, id efficitur arcu porta eget. Duis sed nulla sodales, aliquet velit vitae, aliquam tortor. Integer auctor convallis mauris eget molestie. Quisque ullamcorper rhoncus urna, aliquet mollis nisl semper sit amet. Aliquam ornare eu sapien eu venenatis. Nam eget libero tincidunt, ultricies mi id, mollis ligula. Nullam in aliquet leo. Nulla in turpis at justo malesuada tincidunt eget in arcu. Quisque efficitur quis nisi vel volutpat. Mauris varius lacus ornare mattis sagittis. Quisque eleifend volutpat mauris. Donec vulputate felis neque, eget ornare augue scelerisque ac.') ?>
                </p>
            </div>
            <div class="row justify-content-center">
                <?= Html::img(Yii::getAlias('@web') . '/images/teque02.jpg', [
                    'class'          => 'wow fadeInLeft lazy img-fluid m20',
                    'data-wow-delay' => '0.5s',
                    'alt'            => Html::encode('Tequeño Mucho'),
                ]) ?>
                <?= Html::img(Yii::getAlias('@web') . '/images/teque03.jpg', [
                    'class'          => 'wow fadeInRight lazy img-fluid m20',
                    'data-wow-delay' => '0.5s',
                    'alt'            => Html::encode('Tequeño Mucho'),
                ]) ?>
            </div>
            <div class="row justify-content-center">
                <p class="wow fadeIn lazy">
                    <?= Html::encode('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in porttitor urna. Morbi in augue eu odio aliquam consequat. Pellentesque elementum porttitor elementum. Cras semper porta nibh, id efficitur arcu porta eget. Duis sed nulla sodales, aliquet velit vitae, aliquam tortor. Integer auctor convallis mauris eget molestie. Quisque ullamcorper rhoncus urna, aliquet mollis nisl semper sit amet. Aliquam ornare eu sapien eu venenatis. Nam eget libero tincidunt, ultricies mi id, mollis ligula. Nullam in aliquet leo. Nulla in turpis at justo malesuada tincidunt eget in arcu. Quisque efficitur quis nisi vel volutpat. Mauris varius lacus ornare mattis sagittis. Quisque eleifend volutpat mauris. Donec vulputate felis neque, eget ornare augue scelerisque ac.') ?>
                </p>
            </div>
        </div>
    </div>
</div>
