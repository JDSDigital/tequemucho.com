<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contacto';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-contact">
        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                <?= Html::encode('Gracias por escribirnos. Nos comunicaremos con Usted en breve.') ?>
            </div>

        <?php endif; ?>

            <div class="row">
                <div class="col-lg-6">

                    <h1><?= Html::encode($this->title) ?></h1>
                    <p><?= Html::encode('¡Escríbenos y síguenos en las redes sociales!') ?></p>

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <div class="md-form">
                            <?= $form->field($model, 'name') ?>
                        </div>
                        <div class="md-form">
                            <?= $form->field($model, 'email') ?>
                        </div>
                        <div class="md-form">
                            <?= $form->field($model, 'subject') ?>
                        </div>
                        <div class="md-form">
                            <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Mensaje'])->label(false) ?>
                        </div>
                        <div class="md-form">
                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-xs-6 p0">{input}</div><div class="col-xs-3">{image}</div></div>',
                                'options' => ['placeholder' => 'Código de verificación'],
                            ])->label(false) ?>
                        </div>
                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary m0a', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

                </div>
                <div class="col-lg-6">
                    <!--Carousel Wrapper-->
                    <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-1" data-slide-to="1"></li>
                            <li data-target="#carousel-example-1" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item carousel-contact active">
                                <?= Html::img(Yii::getAlias('@web') . '/images/slider/contact/01.jpg', [
                                    'class' => 'img-fluid',
                                ]) ?>
                            </div>
                            <!--/First slide-->

                            <!--Second slide-->
                            <div class="carousel-item carousel-contact">
                                <?= Html::img(Yii::getAlias('@web') . '/images/slider/contact/02.jpg', [
                                    'class' => 'img-fluid',
                                ]) ?>
                            </div>
                            <!--/Second slide-->

                            <!--Third slide-->
                            <div class="carousel-item carousel-contact">
                                <?= Html::img(Yii::getAlias('@web') . '/images/slider/contact/03.jpg', [
                                    'class' => 'img-fluid',
                                ]) ?>
                            </div>
                            <!--/Third slide-->
                        </div>
                        <!--/.Slides-->

                        <!--Controls-->
                        <a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
                            <span class="icon-prev" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
                            <span class="icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->

                    <!--<ul>
                        <li><h3><i class="fa fa-lg fa-instagram m20 ml20"></i><?/*= Html::encode('@tequemucho') */?></h3></li>
                        <li><h3><i class="fa fa-lg fa-twitter m20 ml40"></i><?/*= Html::encode('@tequemucho') */?></h3></li>
                        <li><h3><i class="fa fa-lg fa-facebook m20 ml60"></i><?/*= Html::encode('Tequemucho') */?></h3></li>
                        <li><h3><i class="fa fa-lg fa-phone m20 ml80"></i><?/*= Html::encode('0212-6684108') */?></h3></li>
                        <li><h3><i class="fa fa-lg fa-envelope-o m20 ml100"></i><?/*= Html::encode('tequemucho@gmail.com') */?></h3></li>
                    </ul>-->
                </div>
            </div>

    </div>
</div>