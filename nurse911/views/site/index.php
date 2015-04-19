<?php

use yii\helpers\Html;

$this->title = 'Nurse911';
?>

<section class="container" id="indexPage">
    <?= Html::img('@web/images/nurses.jpg', ['alt' => 'Some Nurses', 'class' => 'img-responsive']) ?>
    <h1>Welcome to Nurse911</h1>

    <article class="col-sm-8">
        <h3>We're here to help!</h3>
        <p>All nurses, from the first-year student to the seasoned veteran need help occasionally. Whether you need help with conversions, a reference for scales, or
        just a convenient place to store important numbers, Nurse911 has got your back. Let us do the trivial stuff for you, so you can focus on what's really
        important: <em>your patients.</em></p>
    </article>

    <article class="col-sm-4 callToAction">
       <h3>Join us!</h3>
        <div class="buttons">
            <div id="left">
                <p>Not a Member?</p>
                <?= Html::a('Sign Up', ['user/create'], ['class' => 'btn btn-red']) ?>
            </div>
            <div id="right">
                <p>Returning Member?</p>
                <?= Html::a('Login', ['user/login'], ['class' => 'btn btn-red']) ?>
            </div>
        </div>

    </article>
</section>
