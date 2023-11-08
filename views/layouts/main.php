<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="../../web/css/style.css">
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <div class="container">
        <div class="header">
            <img src="../../web/assets/logo.svg" alt="" class="logo">
            <div class="menu">
                <a href="">Главная</a>
                <a href="">Модели</a>
                <a href="">Фотографы</a>
                <a href="">Избранное</a>
                <a href="">Вход</a>
                <a href="">Регистрация</a>
            </div>
        </div>  
    </div>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer>
    <div class="container">
        <div class="footer">
            <div class="menu_footer">
                <a href="" class="white">Главная</a>
                <a href="" class="white">Модели</a>
                <a href="" class="white">Фотографы</a>
                <a href="" class="white">Избранное</a>
                <a href="" class="white">Профиль</a>
                <a href="" class="white">Поддержка</a>
            </div>
            <div class="left_footer">
                <p class="white">implement.the.idea@gmail.com</p>
                <img src="../../web/assets/vk.svg" alt="" class="vk">
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
