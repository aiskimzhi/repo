<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\ActiveField;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Update data';
?>

<h2 id="h2-update"><strong><em>Enter new data: </em></strong></h2>
<div id="update-form">
    <?php $form = ActiveForm::begin(); ?>
    <div id="left-labels">
        <div class="labels-p"><strong>First name: </strong></div>
        <div class="labels-p"><strong>Last name: </strong></div>
        <div class="labels-p"><strong>E-mail: </strong></div>
        <div class="labels-p"><strong>Phone: </strong></div>
        <div class="labels-p"><strong>Skype: </strong></div>
        <div class="labels-p"></div>
    </div>

    <div id="update-inputs">
        <?= $form->field($model, 'first_name')->textInput(['maxlength' => true])->label(false) ?>
        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true])->label(false) ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label(false) ?>
        <?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label(false) ?>
        <?= $form->field($model, 'skype')->textInput(['maxlength' => true])->label(false) ?>
        <?= Html::submitButton('Update', ['class' => 'btn but btn-create', 'id' => 'but-sub']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<div>
    <?php $f = ActiveForm::begin(['options' => ['class' => 'form-horizontal']]); ?>

    <?= $f->field($model, 'first_name', [
        'template' => '<div class="col-sm-2">{label}</div><div class="col-sm-10">{input}</div>',

    ]) ?>

    <?= $f->field($model, 'email') ?>

    <?php ActiveForm::end(); ?>
</div>



<!--
<div class="form-group">
    <label class="col-sm-2 control-label">Label</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id=">
    </div>
</div>

<div class="col-sm-2">{label}</div><div class="col-sm-10">{input}</div>

<div class="col-sm-10"><input type="text" class="form-control"></div>
