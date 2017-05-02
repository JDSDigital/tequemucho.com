<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-products">
        <h1><?= Html::encode($this->title) ?></h1>
        <div class="product-list">
            <div class="row">
                <div class="col-md-3">
                    <?= Html::img(Yii::getAlias('@web'). '/images/slider/contact/06.jpg', ['class' => 'img-fluid']) ?>
                </div>
                <div class="col-md-9 product-text">
                    <h2>Tradicional</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <?= Html::img(Yii::getAlias('@web'). '/images/slider/contact/06.jpg', ['class' => 'img-fluid']) ?>
                </div>
                <div class="col-md-9 product-text">
                    <h2>Cebolla Caramelizada</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <?= Html::img(Yii::getAlias('@web'). '/images/slider/contact/06.jpg', ['class' => 'img-fluid']) ?>
                </div>
                <div class="col-md-9 product-text">
                    <h2>Maíz</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <?= Html::img(Yii::getAlias('@web'). '/images/slider/contact/06.jpg', ['class' => 'img-fluid']) ?>
                </div>
                <div class="col-md-9 product-text">
                    <h2>Ajo y Perejil</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <?= Html::img(Yii::getAlias('@web'). '/images/slider/contact/06.jpg', ['class' => 'img-fluid']) ?>
                </div>
                <div class="col-md-9 product-text">
                    <h2>Pimentón</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <?= Html::img(Yii::getAlias('@web'). '/images/slider/contact/06.jpg', ['class' => 'img-fluid']) ?>
                </div>
                <div class="col-md-9 product-text">
                    <h2>Albahaca</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <?= Html::img(Yii::getAlias('@web'). '/images/slider/contact/06.jpg', ['class' => 'img-fluid']) ?>
                </div>
                <div class="col-md-9 product-text">
                    <h2>Chocolate</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <?= Html::img(Yii::getAlias('@web'). '/images/slider/contact/06.jpg', ['class' => 'img-fluid']) ?>
                </div>
                <div class="col-md-9 product-text">
                    <h2>Tequeño Faltante</h2>
                </div>
            </div>
        </div>
    </div>
</div>