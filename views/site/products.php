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
                <div class="col-md-6" style="margin-bottom: 10px">
                    <div class="col-md-6">
                        <?= Html::img(Yii::getAlias('@web') . '/images/products/01.jpg', ['class' => 'img-fluid product-image']) ?>
                    </div>
                    <div class="col-md-6 product-text">
                        <h2>Tradicional</h2>
                        <p>Así comenzó todo. Un delicioso quesito envuelto en masa y frito. ¿Que puede salir mal?</p>
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: 10px">
                    <div class="col-md-6">
                        <?= Html::img(Yii::getAlias('@web'). '/images/products/02.jpg', ['class' => 'img-fluid product-image']) ?>
                    </div>
                    <div class="col-md-6 product-text">
                        <h2>Cebolla Dulce</h2>
                        <p>Deliciosa masa de cebolla caramelizada. Deleitará tu paladar con una experiencia única.</p>
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: 10px">
                    <div class="col-md-6">
                        <?= Html::img(Yii::getAlias('@web'). '/images/products/03.jpg', ['class' => 'img-fluid product-image']) ?>
                    </div>
                    <div class="col-md-6 product-text">
                        <h2>Maíz</h2>
                        <p>Masa de maíz con el mas fresco queso blanco. ¡La cachapa se convirtió en tequeño!</p>
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: 10px">
                    <div class="col-md-6">
                        <?= Html::img(Yii::getAlias('@web'). '/images/products/04.jpg', ['class' => 'img-fluid product-image']) ?>
                    </div>
                    <div class="col-md-6 product-text">
                        <h2>Ajo y Perejil</h2>
                        <p>Nacieron para estar juntos, combinados con el mejor queso son increibles.</p>
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: 10px">
                    <div class="col-md-6">
                        <?= Html::img(Yii::getAlias('@web'). '/images/products/05.jpg', ['class' => 'img-fluid product-image']) ?>
                    </div>
                    <div class="col-md-6 product-text">
                        <h2>Chocolate</h2>
                        <p>Rellenos de delicioso chocolate venezolano. Imposible resistirse.</p>
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: 10px">
                    <div class="col-md-6">
                        <?= Html::img(Yii::getAlias('@web'). '/images/products/04.jpg', ['class' => 'img-fluid product-image']) ?>
                    </div>
                    <div class="col-md-6 product-text">
                        <h2>Albahaca</h2>
                        <p>Distinguidos, elegantes, increiblemente deliciosos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>