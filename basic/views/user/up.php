<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Update data';
?>
<h2><strong><em>Enter new data: </em></strong></h2>
<div style="width: 50%">

    <?php $form = ActiveForm::begin([
        'options' => [
            'class' => 'form-horizontal'
        ]
    ]); ?>
        <label for="user-first_name" class="col-sm-2 control-label">First name: </label>
        <div class="col-sm-10">
            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true])->label(false) ?>
        </div>
        <label for="user-last_name" class="col-sm-2 control-label">Last name: </label>
        <div class="col-sm-10">
            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true])->label(false) ?>
        </div>
        <label for="user-email" class="col-sm-2 control-label">E-mail: </label>
        <div class="col-sm-10">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label(false) ?>
        </div>
        <label for="user-phone" class="col-sm-2 control-label">Phone: </label>
        <div class="col-sm-10">
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label(false) ?>
        </div>
        <label for="user-skype" class="col-sm-2 control-label">Skype: </label>
        <div class="col-sm-10">
            <?= $form->field($model, 'skype')->textInput(['maxlength' => true])->label(false) ?>
        </div>

        <div style="margin-left: 16.7%">
            <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>