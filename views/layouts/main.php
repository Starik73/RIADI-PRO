<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<header class="header">
    <div class="container__riadi header__container">
        <a href="/" class="logo--wrap">
            <img src='/web/img/logo/logo.png' alt="Логотип RIADI pro" class="logo">
        </a>
        <!-- /.logo--wrap -->

        <div class="header__item tel">
            <!-- /.<a href="tel:+79820777555" class="header__item__link">+7 (9820) 777-555</a> -->
            <a href="tel:+79820777555" class="header__item__link ligth_tel">+7 (902) 210-56-62</a>
            <!-- /.header__item__link -->
            <span class="header__item__subtitle">Менеджер</span>
            <!-- /.header__item__subtitle -->
        </div>
        <!-- /.header__item -->

        <div class="header__item mail">
            <a href="mailto:info@riadi.pro" class="header__item__link ligth_tel">info@riadi.pro</a>
            <!-- /.header__item__link -->
            <span class="header__item__subtitle">Пишите нам</span>
            <!-- /.header__item__subtitle -->
        </div>
        <!-- /.header__item -->

        <a href="/pages/offer/offer.php" class="header__btn">Акции</a>
        <!-- /.header__btn -->

        <div class="burger--wrap">
            <div class="burger">
                <div class="burger__item burger__item--1"></div>
                <!-- /.burger__item -->
                <div class="burger__item burger__item--2"></div>
                <!-- /.burger__item -->
                <div class="burger__item burger__item--3"></div>
                <!-- /.burger__item -->
            </div>
            <!-- /.burger -->
            <span class="burger__title">Меню</span>
            <!-- /.burger__title -->
        </div>
        <!-- /.burger--wrap -->

        <div class="header__menu--wrap">
            <nav class="header__menu">
                <a href="/web/index.php?r=site%2Fabout" class="header__menu__link">О компании</a>
                <!-- /.header__menu__link -->
                <a href="/web/index.php?r=site%2Fcontact" class="header__menu__link">Виды работ</a>
                <!-- /.header__menu__link -->
                <a href="/pages/news/news.php" class="header__menu__link">Новости</a>
                <!-- /.header__menu__link -->
                <a href="/pages/gallery/gallery.php" class="header__menu__link">Галерея</a>
                <!-- /.header__menu__link -->
                <a href="/pages/info/info.php" class="header__menu__link">Информация для подрядных организаций</a>
                <!-- /.header__menu__link -->
                <a href="/pages/offer/offer.php" class="header__menu__link">Акции</a>
                <!-- /.header__menu__link -->
                <a href="/pages/contacts/contacts.php" class="header__menu__link header__menu__link--last">Контакты</a>
                <!-- /.header__menu__link -->
            </nav>
            <!-- /.header__menu -->
        </div>
        <!-- /.header__menu--wrap -->
    </div>
    <!-- /.container header__container -->
</header>
<div>
    <main class="main">
        <div class="container">
            <?php
            echo Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
            <?= Alert::widget() ?>
        </div>
        <?= $content ?>
    </main>
</div>
<footer class="footer">
    <div class="container__riadi footer__container">
        <div class="footer__info">
            <a href="/" class="logo--wrap">
                <img src="/web/img/logo/logo.png" alt="Логотип RIADI pro" class="logo">
            </a>
            <!-- /.logo--wrap -->
            <span class="footer__info__address footer__info__text--light">
                    ООО "РИАДИ ПРО"<hr>
                    432035, Россия,
                    Ульяновская область, г. Ульяновск,
                    проспект Гая, д. 100, офис 19 (2 этаж).<hr>
                </span>
            <!-- /.footer__info__address footer__info__text--light -->
            <div class="footer__info__item">
                <span class="footer__info__text--bold">Телефон:</span>
                <a href="tel:+79820777555" class="footer__info__text--light">+7 (9820) 77-75-55
                    <hr>
                </a>
                <a href="tel:+79022105662" class="footer__info__text--light">+7 (902) 210-56-62
                    <hr>
                </a>
            </div>
            <!-- /.footer__info__item -->
            <div class="footer__info__item">
                <span class="footer__info__text--bold">Email:</span>
                <a href="mailto:info@riadi.pro" class="footer__info__text--light">info@riadi.pro
                    <hr>
                </a>
            </div>
            <!-- /.footer__info__item -->
            <?php
            ?>
            <a href="/" class="btn btn-block">Вход</a>
        </div>
        <!-- /.footer__info -->
        <nav class="footer__nav">
            <div class="footer__nav__left">
                <a href="/pages/company/company.php" class="footer__nav__main-link">О компании</a>
                <a href="/pages/news/news.php" class="footer__nav__main-link">Новости</a>
                <a href="/pages/gallery/gallery.php" class="footer__nav__main-link">Галерея</a>
                <a href="/pages/offer/offer.php" class="footer__nav__main-link">Акции</a>
                <a href="/pages/contacts/contacts.php" class="footer__nav__main-link">Контакты</a>
                <a href="/pages/info/info.php" class="footer__nav__main-link">Информация для подрядных организаций</a>
            </div>
            <div class="footer__nav__right">
                <a href="/pages/service/service.php" class="footer__nav__main-link footer__nav__right__main-link">Мы
                    выполняем следующие виды работ:</a>
                <a href="/pages/service/trimming.php" class="footer__nav__link">Отделочные</a>
                <a href="/pages/service/dismantling.php" class="footer__nav__link">Демонтажные</a>
                <a href="/pages/service/wiring.php" class="footer__nav__link">Электромонтажные</a>
                <a href="/pages/service/commissioning.php" class="footer__nav__link">Пусконаладочные</a>
                <a href="/pages/service/design.php" class="footer__nav__link">Проектные (РД)</a>
                <a href="/pages/service/steel-erection.php" class="footer__nav__link">Монтаж металлоконструкций</a>
                <p class="footer__nav__main-link footer__nav__right__main-link">Сервис, монтаж и обслуживание
                    систем:</p>
                <a href="/pages/service/ventilation.php" class="footer__nav__link">Вентиляции</a>
                <a href="/pages/service/heating.php" class="footer__nav__link">Теплоснабжения</a>
                <a href="/pages/service/conditioning.php" class="footer__nav__link">Кондиционирования</a>
                <a href="/pages/service/water-supply.php" class="footer__nav__link">Водоснабжения</a>
                <a href="/pages/service/sewage-and-water-disposal.php" class="footer__nav__link">Канализации и
                    водоотведения</a>
                <a href="/pages/service/instrumentation.php" class="footer__nav__link">КИПиА</a>
            </div>
        </nav>
        <!-- /.footer__nav -->
        <div class="footer__other">
            <div class="footer__other__top">
                <div class="footer__other__dosc">
                        <span class="footer__other__title" style="font-size: 18px;">
                            Документы
                         </span>
                    <!-- /.footer__other__title footer__other__dosc__title -->
                    <a href="/docs/footer/%D0%94%D0%BE%D0%B3%D0%BE%D0%B2%D0%BE%D1%80%20%E2%84%96%20%D0%9C01-01_19%20%D0%9E%D0%9E%D0%9E%20%D0%A0%D0%98%D0%90%D0%94%D0%98%20%D0%9F%D0%A0%D0%9E%20%20%D0%A8%D0%90%D0%91%D0%9B%D0%9E%D0%9D.docx"
                       class="footer__other__dosc__link"><span class="footer__other__title footer__other__dosc__title">Договор подряда</span></a>
                    <a href="/docs/footer/%D0%9A%D0%B0%D1%80%D1%82%D0%BE%D1%87%D0%BA%D0%B0%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D1%8F%20%D0%9E%D0%9E%D0%9E%20%D0%A0%D0%98%D0%90%D0%94%D0%98%20%D0%9F%D0%A0%D0%9E%20%D0%98%D0%9D%D0%9D%207321008798.doc"
                       class="footer__other__dosc__link"><span class="footer__other__title footer__other__dosc__title">Карточка предприятия</span></a>
                    <a href="/docs/sro/SRO RIADI PRO.pdf" class="footer__other__dosc__link"><span
                                class="footer__other__title footer__other__dosc__title">Выписка из СРО</span></a>
                    <a href="/docs/footer/price.xls" class="footer__other__dosc__link"><span
                                class="footer__other__title footer__other__dosc__title">Прайс</span></a>
                </div>
                <!-- /.footer__other__dosc -->

                <div class="footer__other__social">
                        <span class="footer__other__title" style="font-size: 18px;">
                            Социальные сети
                        </span>
                    <!-- /.footer__other__title -->
                    <div class="footer__other__social__link--wrap">
                        <a target="_blank" href="https://wa.me/890221056612" class="footer__other__social__link">
                            <img src="/web/img/footer__other__social__link__img/whatsapp.png" alt=""
                                 class="footer__other__social__link__img">
                        </a>
                        <!-- /.footer__other__social__link -->
                        <a target="_blank" href="tg://resolve?domain=mironovvi" class="footer__other__social__link">
                            <img src="/web/img/footer__other__social__link__img/telegram.png" alt=""
                                 class="footer__other__social__link__img">
                        </a>
                        <!-- /.footer__other__social__link -->
                        <a target="_blank" href="viber://chat?number=790221056612" class="footer__other__social__link">
                            <img src="/web/img/footer__other__social__link__img/viber.png" alt=""
                                 class="footer__other__social__link__img">
                        </a>
                        <!-- /.footer__other__social__link -->
                        <a target="_blank" href="https://www.instagram.com/riadi_pro/?hl=ru"
                           class="footer__other__social__link">
                            <img src="/web/img/footer__other__social__link__img/instagram.png" alt=""
                                 class="footer__other__social__link__img">
                        </a>
                        <!-- /.footer__other__social__link -->
                    </div>
                    <!-- /.footer__other__social__link--wrap -->
                </div>
                <!-- /.footer__other__social -->
            </div>
            <!-- /.footer__other__top -->
            <div class="footer__other__copyright">

            </div>
            <!-- /.footer__other__bottom -->
        </div>
        <!-- /.footer__other -->
    </div>
    <!-- /.container footer__container -->
</footer>
<!-- /.footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['email'])) {
    $name = substr($_POST['name'], 0, 64);
    $tel = substr($_POST['tel'], 0, 64);
    $email = substr($_POST['email'], 0, 64);
    $message = substr($_POST['area'], 0, 350);

    try {
        $mail->CharSet = "utf-8";
        $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
        $mail->Username   = 'riadipro73@mail.ru'; // Логин на почте
        $mail->Password   = 'QashqaiK554EY'; // Пароль на почте
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('riadipro73@mail.ru', 'RIADI PRO'); // Адрес самой почты и имя отправителя
        $mail->addAddress('stariktz@mail.ru', 'RIADI PRO'); // Add a recipient
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                // Enable verbose debug output
        $mail->isSMTP();                                      // Send using SMTP
        $mail->SMTPAuth   = true;                             // Enable SMTP authentication

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Заполнена форма на сайте';
        $mail->Body = "User:\r\n" . $name . "\r\n\r\n<br>";
        $mail->Body .= "Tel:\r\n" . $tel . "\r\n\r\n<br>";
        $mail->Body .= "E-mail:\r\n" . $email . "\r\n\r\n<br>";
        $mail->Body .= "Message:\r\n" . $message;

        $mail->send();
        echo "<script>alert('Данные отправлены')</script>";
        unset($mail);
    } catch (Exception $e) {
        echo "alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')";
    }
}
?>
