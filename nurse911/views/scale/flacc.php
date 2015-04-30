<?php

use yii\helpers\Html;

$this->title = 'FLACC Scale';
?>
<div class="scale-flacc container">
    <h1>FLACC Scale</h1>
    <?php if(isset($result)): ?>
    <div class="col-xs-8 scale">
        <?php
            echo "<h3>Score: " . $result['score'] . "</h3>";
            echo "<p>Patient is likely in " . $result['pain'] . "</p>";
        ?>
        <?= Html::a('Another Assesment?', ['scale/flacc']) ?>
    </div>
    <?php else: ?>
    <?= Html::beginForm(['scale/flacc'], 'post', ['class' => 'scale col-xs-8']) ?>
           <h3>Face</h3>
            <?= Html::radioList('face', null, [
                0 => '0: No particular expression or smile',
                1 => '1: Occasional grimace or frown, withdrawn, uninterested',
                2 => '2: Frequent to constant quivering chin, clenched jaw'
            ]) ?>
            <h3>Legs</h3>
            <?= Html::radioList('legs', null, [
                0 => '0: Normal position or relaxed',
                1 => '1: Uneasy, restless, tense',
                2 => '2: Kicking or legs drawn up',
            ]) ?>
            <h3>Activity</h3>
            <?= Html::radioList('activity', null, [
                0 => '0: Lying quietly, normal position, moves easily',
                1 => '1: Squirming, shifting, back and forth, tense',
                2 => '2: Arched, rigid or jerking'
            ]) ?>
            <h3>Cry</h3>
            <?= Html::radioList('cry', null, [
                0 => '0: No cry (awake or asleep)',
                1 => '1: Moans or whimpers, occasional complaint',
                2 => '2: Crying steadily, screams or sobs, frequent complaints'
            ]) ?>
            <h3>Consolability</h3>
            <?= Html::radioList('consolability', null, [
                0 => '0: Content, relaxed',
                1 => '1: Reassured by occasional touching, hugging or being talked to, distractible',
                2 => '2: Difficult to console or comfort'
            ]) ?>
            <?= Html::submitButton('Calculate', ['class' => 'btn btn-red']) ?>
    <?= Html::endForm() ?>
    <?php endif ?>

    <div class="col-xs-4">
    <?= Html::img('@web/images/nurse8.jpg', ['alt' => 'A Nurse', 'class' => 'img-responsive']) ?>
    </div>

</div>
