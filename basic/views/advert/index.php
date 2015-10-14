<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdvertSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adverts';

echo '<div class="advert-index">';

     // echo $this->render('_search', ['model' => $searchModel]);

$form = ActiveForm::begin(['id' => 'form-dropdown-search', 'method' => 'get']);
echo '<div class="form-inline">';
echo $form->field($searchModel, 'category_id')->dropDownList($catList,
    [
        'prompt'   => '- Choose a Category -',
        'onchange' => '
                        $.ajax({
                            url: "' . Url::toRoute('get-subcat?id=') . '" + $(this).val(),
                            success: function( data ) {
                                $( "#' . Html::getInputId($searchModel, 'subcategory_id') . '" ).html( data ).attr("disabled", false);
                            }
                        });
                       '
    ]);
echo '</div>';

echo '<div class="form-inline">';
echo $form->field($searchModel, 'subcategory_id')
    ->dropDownList($subcatList, [
        'value' => 'null',
        'prompt' => '- Choose a Subcategory -',
        'disabled' => 'disabled',
    ]);
echo '</div>';

echo '<div class="form-inline">';
echo $form->field($searchModel, 'region_id')->dropDownList($regionList,
    [
        'prompt'   => '- Choose a Region -',
        'onchange' => '
                        $.ajax({
                            url: "' . Url::toRoute('get-city?id=') . '" + $(this).val(),
                            success: function( data ) {
                                $( "#' . Html::getInputId($searchModel, 'city_id') . '" ).html( data ).attr("disabled", false);
                            }
                        });
                       '
    ]);
echo '</div>';

echo '<div class="form-inline">';
echo $form->field($searchModel, 'city_id')
    ->dropDownList($cityList, [
        'value' => 'null',
        'prompt' => '- Choose a City -',
        'disabled' => 'disabled',
    ]);
echo '</div>';

echo '<label class="control-label" for="before-field">Choose a period</label><br>';
echo '<div class="form-inline">';
echo '<label class="control-label" for="before-field">From: </label>';
echo DatePicker::widget(['name' => 'before', 'id' => 'before-field', 'options' => ['class' => 'form-control']]);
echo '<label class="control-label" for="after-field">To: </label>';
echo DatePicker::widget(['name' => 'after', 'id' => 'after-field', 'options' => ['class' => 'form-control']]);
echo '</div>';

echo '<br>';

echo '<div>';
echo $submit;
echo '</div>';

ActiveForm::end();

echo '<div id="gridVew">';
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showHeader' => false,
        'columns' => [
            [
                'label' => 'image',
                'format' => 'raw',
                'value' => function($searchModel) {
                        return Html::img(Yii::$app->urlManager
                            ->createAbsoluteUrl($searchModel->picture($searchModel->id)), [
                            'width' => 120,
                            'height' => 120
                        ]);
                    },
                'options' => ['style' => 'width: 130px; max-width: 130px;'],
            ],
            [
                'label' => 'data',
                'format' => 'html',
                'value' => function($searchModel) {
                    $href = Url::toRoute('advert/view?id=') . $searchModel->id;
                    $text = '<div><strong><a href="' . $href . '"> ' . $searchModel->title . '</a></strong></div>';
                    $text .= '<div>' . $searchModel->category->name . ' » ' . $searchModel->subcategory->name . '</div>';
                    $text .= '<br>';
                    $text .= '<br>';
                    $text .= '<div>' . $searchModel->region->name . ', ' . $searchModel->city->name . '</div>';
                    $format = 'd M Y H:i';
                    $text .= date($format, $searchModel->updated_at);

                    return $text;
                }
            ],
            [
                'attribute' => 'price',
                'format' => 'html',
                'value' => function($searchModel) {
                    $value = '<h4><strong>' . $searchModel->price . ' USD</strong></h4>';
                    return $value;
                },
                'options' => ['style' => 'width: 130px; max-width: 130px;'],
            ],
        ],
    ]);
echo '</div>';

echo '</div>';

