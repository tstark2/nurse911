<?php

use yii\helpers\Html;

$this->title = 'Glasgow Coma Scale';
?>
<div class="scale-gcs container">
    <h1>Glasgow Coma Scale</h1>
      <?php if(isset($result)): ?>
       <div class="col-xs-8 scale">
            <?php
                echo "<h3>Eye: " . $result['eye'] ."</h3>";
                echo "<h3>Verbal: " . $result['verbal'] . "</h3>";
                echo "<h3>Motor: " . $result['motor'] . "</h3>";
                echo "<h2>Total: " . $result['total'] . "</h2>";
                echo "<p>This patient may have " . $result['text'] ."</p>";
            ?>
            <?= Html::a('Another Assesment?', ['scale/gcs']) ?>
        </div>
    <?php else: ?>
       <?= Html::beginForm(['scale/gcs'], 'post', ['class' => 'scale col-xs-8']) ?>
           <h3>Eyes</h3>
            <?= Html::radioList('eye', null, [
                1 => '1: Does not open eyes',
                2 => '2: Opens eyes in response to painful stimuli',
                3 => '3: Opens eyes in response to voice',
                4 => '4: Opens eyes spontaneously'
            ]) ?>
            <h3>Verbal</h3>
            <?= Html::radioList('verbal', null, [
                1 => '1: Makes no sounds',
                2 => '2: Makes incomprehensible sounds',
                3 => '3: Utters inappropriate words',
                4 => '4: Confused, disoriented',
                5 => '5: Oriented, converses normally'
            ]) ?>
            <h3>Motor</h3>
            <?= Html::radioList('motor', null, [
                1 => '1: Makes no movements',
                2 => '2: Extension to painful stimuli',
                3 => '3: Abnormal flexion to painful stimuli',
                4 => '4: Flexion/Withdrawl to painful stimuli',
                5 => '5: Localizes painful stimuli',
                6 => '6: Obeys commands'
            ]) ?>
            <?= Html::submitButton('Calculate', ['class' => 'btn btn-red']) ?>
    <?= Html::endForm() ?>
    <?php endif ?>

    <div class="col-xs-4">
    <?= Html::img('@web/images/nurse6.jpg', ['alt' => 'A Nurse', 'class' => 'img-responsive']) ?>
    </div>

</div>
