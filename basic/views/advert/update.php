<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Advert */
/* @var $catList */
/* @var $subcatList */
/* @var $regionList */
/* @var $cityList */

$this->title = 'Update Advert: ' . ' ' . $model->title;

echo '<div class="advert-update">';

$form = ActiveForm::begin(['id' => 'form']);

echo $form->field($model, 'category_id')->dropDownList($catList,
    [
        'prompt'   => '- Choose a Category -',
        'onchange' => '
                        $.ajax({
                            url: "' . Url::toRoute('get-subcat?id=') . '" + $(this).val(),
                            success: function( data ) {
                                $( "#' . Html::getInputId($model, 'subcategory_id') . '" ).html( data ).attr("disabled", false);
                            }
                        });
                       '
    ]);


echo $form->field($model, 'subcategory_id')->dropDownList($subcatList);

echo $form->field($model, 'region_id')->dropDownList($regionList,
    [
        'prompt'   => '- Choose a Region -',
        'onchange' => '
                        $.ajax({
                            url: "' . Url::toRoute('get-city?id=') . '" + $(this).val(),
                            success: function( data ) {
                                $( "#' . Html::getInputId($model, 'city_id') . '" ).html( data ).attr("disabled", false);
                            }
                        });
                       '
    ]);


echo $form->field($model, 'city_id')->dropDownList($cityList);

echo $form->field($model, 'title')->textInput();

echo $form->field($model, 'text')->textarea(['rows' => 6]);

echo '<div class="form-group">' . Html::submitButton('Update Advert', ['class' => 'btn btn-primary']) . '</div>';

ActiveForm::end();

echo '</div>';
