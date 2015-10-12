<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\base\InvalidParamException;

class ResetPasswordForm extends Model
{
    public $password;

    private $_user;

    public function rules()
    {
        return [
            ['password', 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'password' => 'Password'
        ];
    }

    public function __construct($token, $config = [])
    {
        if(empty($token) || !is_string($token))
            throw new InvalidParamException('The key is empty');
        $this->_user = User::findByPasswordResetToken($token);
        if(!$this->_user)
            throw new InvalidParamException('Wrong Key');
        parent::__construct($config);
    }

    public function resetPassword()
    {
        /* @var $user User */
        $user = $this->_user;
        $user->setPassword($this->password);
        $user->removePasswordResetToken();
        return $user->save();
    }
}