<?php

namespace app\models;

use Yii;
use yii\base\Model;

class SendEmailForm extends Model
{
    public $email;

    public function rules()
    {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => User::className(),
                'message' => 'This e-mail is not registered'
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'E-mail'
        ];
    }

    public function sendEmail()
    {
        /* @var $user User */
        $user = User::findOne(['email' => $this->email]);

        if ($user) {
            $user->generatePasswordResetToken();
            if ($user->save()) {
                return Yii::$app->mailer->compose('resetPassword', ['user' => $user])
                    ->setFrom('robot@mail.com')
                    ->setTo($this->email)
                    ->setSubject('Password reset for '.Yii::$app->name)
                    ->send();
            }
        }
        return false;
    }
}