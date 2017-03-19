<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Galería';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-gallery">
        <h1><?= Html::encode($this->title) ?></h1>
        <?php foreach($images as $image): ?>
            <div class="col-lg-4 view hm-zoom">
                <?= Html::img(Yii::getAlias('@web') . $image, [
                    'class'          => 'wow zoomIn lazy img-fluid m20',
                    'data-wow-delay' => '0.5s',
                    'alt'            => Html::encode('Tequeño Mucho'),
                ]) ?>
                <a href="<?= Yii::getAlias('@web') . $image ?>" data-fancybox="gallery" data-caption="Tequeño Mucho">
                    <div class="mask waves-effect waves-light"></div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>