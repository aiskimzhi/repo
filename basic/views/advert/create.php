<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use app\models\User;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Advert */
/* @var $user app\models\User */

$this->title = 'Create Advert';

echo '<div>';

    echo DetailView::widget([
    'model' => $user,
    'options' => [
        'width' => '300px',
    ],
    'template' => '<tr><td max-width="150px"><strong>{label}</strong> {value}</td></tr>',
    'attributes' => [
        [
            'label' => '<h4 class="text-center"><em>Your contacts: </em></h4>',
            'value' => '',
        ],
        [
            'label' => 'Phone: ',
            'value' => $user->phone
        ],
        [
            'label' => 'Skype: ',
            'value' => $user->skype
        ],
        [
            'label' => 'E-mail: ',
            'value' => $user->email
        ],
        [
            'label' => 'To change your contact information follow the link: <a href="'
                . Url::toRoute('user/update-data') . '">Update contact information</a>',
            'value' => '',
        ],
    ]
]);

echo '</div>';
echo '<br>';

$form = ActiveForm::begin(['id' => 'create-advert-form']);

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


echo $form->field($model, 'subcategory_id')
    ->dropDownList(
        ['id' => '- Choose a Sub-category -'],
        [ 'disabled' => 'disabled']
    );

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


echo $form->field($model, 'city_id')
    ->dropDownList(
        ['id' => '- Choose a City -'],
        [ 'disabled' => 'disabled']
    );

echo $form->field($model, 'title')->textInput();

echo $form->field($model, 'text')->textarea(['rows' => 6]);

echo $form->field($model, 'price')->textInput();

$msg = 'You will be able to upload images after you finish creating your advert';
echo Html::tag('div', $msg, ['class' => 'btn btn-primary']);
echo '<br><br>';

echo '<div class="form-group">' . Html::submitButton('Create Advert', ['class' => 'btn btn-success']) . '</div>';

ActiveForm::end();
