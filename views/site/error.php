<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error text-center">

    <?= Html::img(Yii::getAlias('@web'). '/images/not-found.jpg') ?>
    <h1><?= Html::encode('Tequeño no encontrado') ?></h1>
    <?= Html::a('Volver', ['site/index'], ['class' => 'btn']) ?>

</div>
