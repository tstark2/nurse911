<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Nurse911 :: Sign Up';
?>
<div class="user-create container">

    <h1>Sign Up</h1>

    <div class="col-xs-8">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>

    <div class="col-xs-4">
        <?= Html::img('@web/images/nurse2.jpg', ['alt' => 'A Nurse', 'class' => 'img-responsive']) ?>
    </div>

</div>
