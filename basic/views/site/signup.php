<?php

/* @var $this yii\web\View */
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $model app\models\SignupForm */
/* @var $form ActiveForm */

$this->title = 'Sign Up';
?>
<div class="site-signup">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name') ?>
    <?= $form->field($model, 'last_name') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'repeated_password')->passwordInput() ?>
    <?= $form->field($model, 'skype') ?>
    <?= $form->field($model, 'phone') ?>

    <div class="form-group">
        <?= Html::submitButton('Sign Up', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>