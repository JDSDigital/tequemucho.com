<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Galería';
$this->params['breadcrumbs'][] = $this->title;
$i = 1;
?>
<div class="container">
    <div class="site-gallery">
        <h1><?= Html::encode($this->title) ?></h1>
        <div class="row">
            <?php foreach($images as $image): ?>
                <div class="col-md-4 col-sm-6 col-xs-12 view hm-zoom">
                    <?= Html::img(Yii::getAlias('@web') . $image, [
                        'class'          => 'wow zoomIn lazy img-fluid m20',
                        'data-wow-delay' => '0.5s',
                        'alt'            => Html::encode('Tequeño Mucho'),
                    ]) ?>
                    <a href="<?= Yii::getAlias('@web') . $image ?>" data-fancybox="gallery" data-caption="Tequeño Mucho">
                        <div class="mask waves-effect waves-light"></div>
                    </a>
                </div>
                <?php if ($i % 3 == 0) {echo '</div><div class="row">';} ?>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>