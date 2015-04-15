<?php
    use yii\helpers\Html;
    use app\assets\AppAsset;
    use yii\bootstrap\NavBar;
    use yii\bootstrap\Nav;

    AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
        <?php
            NavBar::begin(['brandLabel' => Html::img('@web/images/logo.svg', ['alt' => 'Nurse911 Logo'])]);
            echo Nav::widget([
                'items' => [
                    ['label' => 'Contacts', 'url' => ['#']],
                    ['label' => 'Conversions', 'url' => ['#']],
                    ['label' => 'Scales', 'url' => ['#']],
                    ['label' => 'Logout', 'url' => ['#']]
                ],
                'options' => ['class' => 'nav-pills nav-justified']
            ]);
            NavBar::end();
        ?>

    <?= $content ?>
    <footer></footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
