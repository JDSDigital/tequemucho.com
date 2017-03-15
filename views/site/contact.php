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
        <h1><?= Html::encode($this->title) ?></h1>
        <p><?= Html::encode('¡Escríbenos y síguenos en las redes sociales!') ?></p>

        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                <?= Html::encode('Gracias por escribirnos. Nos comunicaremos con Usted en breve.') ?>
            </div>

        <?php endif; ?>

            <div class="row">
                <div class="col-lg-5">

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'subject') ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-6 p0">{input}</div><div class="col-lg-3">{image}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary m0a', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

                </div>
                <div class="col-lg-6 offset-lg-1">
                    <ul>
                        <li><h3><i class="fa fa-lg fa-instagram m20 ml20"></i><?= Html::encode('@tequemucho') ?></h3></li>
                        <li><h3><i class="fa fa-lg fa-facebook m20 ml40"></i><?= Html::encode('Tequemucho') ?></h3></li>
                        <li><h3><i class="fa fa-lg fa-twitter m20 ml60"></i><?= Html::encode('@tequemucho') ?></h3></li>
                        <li><h3><i class="fa fa-lg fa-phone m20 ml80"></i><?= Html::encode('0212-6684108') ?></h3></li>
                        <li><h3><i class="fa fa-lg fa-envelope-o m20 ml100"></i><?= Html::encode('tequemucho@gmail.com') ?></h3></li>
                    </ul>
                </div>
            </div>

    </div>
</div>