<?php

/* @var $user \app\models\User */

use yii\helpers\Html;

echo 'Hello '.Html::encode($user->first_name).'. ';

$a = '<a href="';
$a .= Yii::$app->urlManager->createAbsoluteUrl(['/site/reset-password', 'token' => $user->password_reset_token]);
$a .= '">follow the link</a>';

echo $a;
//echo Html::a('to change follow the link',
//    Yii::$app->urlManager->createAbsoluteUrl(
//        [
//            '/site/reset-password',
//            'token' => $user->password_reset_token
//        ]
//    ));