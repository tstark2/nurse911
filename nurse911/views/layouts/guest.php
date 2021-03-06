<?php
    use yii\helpers\Html;
    use app\assets\AppAsset;
    use yii\bootstrap\NavBar;
    use yii\bootstrap\Nav;

    AppAsset::register($this);
    /* This is the main layout. It is houses the header and footer content */
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head();
        echo Html::csrfMetaTags();
    ?>

</head>
<body>
<?php $this->beginBody();
    NavBar::begin(['brandLabel' => Html::img('@web/images/logo.svg', ['alt' => 'Nurse911 Logo'])]);
    echo Nav::widget([
        'items' => [
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/user/login']] :
                ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/user/logout'],
                    'linkOptions' => ['data-method' => 'post']],
        ],'options' => ['class' => 'nav-pills loginButton']
    ]);

    NavBar::end();
?>

    <?= $content ?>
    <footer></footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
