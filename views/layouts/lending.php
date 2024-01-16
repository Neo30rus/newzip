<?php
/** @var $content */

use app\assets\NewAsset;

NewAsset::register($this);
?>

<?php $this->beginPage() ?>

<!doctype html>
<html lang=<?= Yii::$app->language ?>>
<head>
    <title><?= $this->title ?></title>
    <?= $this->head() ?>
</head>
<body>
<?= $this->beginBody() ?>
<div>
    <img class="bg" src="../images/banner-bg.svg" alt="banner-bg">
    <a href="#header" class="up"><i class="lni-chevron-up"></i></a>
    <header id="header">
        <div class="container header">
            <a class="logo" href="#"><img src="../images/logo.svg" alt=""></a>
            <nav>
                <a href="features">Home</a>
                <a href="features">Features</a>
                <a href="about">About</a>
                <a href="why">Why</a>
                <a href="team">Team</a>
                <a href="blog">Blog</a>
            </nav>
            <a class="btn" href="#">Free Trial</a>
        </div>
    </header>
</div>

<div>
    <?= $content ?>
</div>
<footer>

</footer>
<?= $this->endBody() ?>
<footer>
    <div class="container">
        <div class="footer_main">
            <div class="footer_item">
                <img src="../images/logo.svg" alt="logo">
                <span>Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</span>
                <div class="links">
                    <a href="#"><i class="lni-facebook-filled"></i></a>
                    <a href="#"><i class="lni-twitter-filled"></i></a>
                    <a href="#"><i class="lni-instagram-filled"></i></a>
                    <a href="#"><i class="lni-linkedin-filled"></i></a>
                </div>
            </div>
            <div class="footer_item">
                <h1>Quick Link</h1>
                <a href="#">Road Map</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Refund Policy</a>
                <a href="#">Teams of Service</a>
                <a href="#">Pricing</a>
            </div>
            <div class="footer_item">
                <h1>Resources</h1>
                <a href="#">Home</a>
                <a href="#">Page</a>
                <a href="#">Portfolio</a>
                <a href="#">Blog</a>
                <a href="#">Contact</a>
            </div>
            <div class="footer_item">
                <h1>Contact Us</h1>
                <span>+809272561823</span>
                <span>info@gmail.com</span>
                <span>www.yourweb.com</span>
                <span>123 Street New Your City, United States Of America 750</span>
            </div>
        </div>
        <div class="copyright">
            Basic.com © 2023
        </div>
    </div>
    <img class="footer_bg" src="../images/footer-bg.svg" alt="footer_bg">
</footer>
</body>
</html>

<?= $this->endPage() ?>


