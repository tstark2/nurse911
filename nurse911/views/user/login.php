<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Nurse911 :: Login';
?>

<div class="user-login container">

    <h1>Login</h1>

    <?= Html::beginForm(['login'], 'post', ['class' => 'col-xs-8']) ?>

    <?= Html::label('Username', 'username') ?>
    <?= Html::textInput('username', null, ['id' => 'username']) ?>

    <?= Html::label('Password', 'password') ?>
    <?= Html::passwordInput('password', null, ['id' => 'password']) ?>

    <?= Html::submitButton('Login', ['class' => 'btn btn-red']) ?>

    <span>Not a member yet?  <?= Html::a('Sign Up!', ['user/create'], ['class' => 'textLink']) ?></span>

    <?= Html::endForm() ?>



    <div class="col-xs-4">
    <?= Html::img('@web/images/nurse.jpg', ['alt' => 'A Nurse', 'class' => 'img-responsive']) ?>
    </div>

</div>
