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
                <a href="<?= Yii::getAlias('@web') . $image ?>" data-fancybox="gallery" data-caption="Tequeño Mucho">
                    <?= Html::img(Yii::getAlias('@web') . $image, [
                        'class'          => 'wow fadeInLeft lazy img-fluid m20',
                        'data-wow-delay' => '0.5s',
                        'alt'            => Html::encode('Tequeño Mucho'),
                    ]) ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>