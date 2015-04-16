<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $confirmPassword;

    public function rules()
    {
        return [
            [['username', 'firstName', 'lastName', 'email', 'password', 'confirmPassword'], 'required'],
            ['email', 'email'],
        ];
    }
}
