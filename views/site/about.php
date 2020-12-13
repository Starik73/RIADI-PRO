<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О компании';
?>

<main class="main main-company-bg">
    <section class="triangle-title--wrap">
        <h2 class="triangle-title p-title-orange-line" style="text-align: center;">О компании</h2>
    </section>
    <div class="company-desc">
        <div class="container company-desc__container">
            <div class="company-desc__paragraph--wrap">
                <h1 style="margin: auto; line-height: 20px;">Строительная компания ООО "РИАДИ ПРО"</h1>
                <br>
                <p class="company-desc__paragraph" style="text-align: justify; text-indent: 0;">
                    <i class="fa fa-superpowers" aria-hidden="true"></i>предлагает свои услуги в сфере строительно-монтажных работ: проектные работы - стадия: рабочая докумантация (РД), демонтажные работы, электромонтажные работы, КИПиА, пусконаладочные работы, отделочные работы, монтаж металлоконструкций, а так же полный комплекс работ по монтажу и обслуживанию систем: вентиляции, кондиционирования, теплоснабжения, водоснабжения, канализации, водоотведения, автоматизации - объектов строительства и объектов действующей эксплуатации.
                </p>
                <p class="company-desc__paragraph" style="text-align: justify; text-indent: 0;">
                    <i class="fa fa-superpowers" aria-hidden="true"></i>с необходимостью подбора подрядчика для выполнения работ сталкиваются многие. Выступаем в роли "подрядчика" различных компаний (в том числе АО «Тандер»), заработали хорошее "имя" на рынке оказания услуг.
                </p>
                <p class="company-desc__paragraph" style="text-align: justify; text-indent: 0;">
                    <i class="fa fa-superpowers" aria-hidden="true"></i>в настоящее время трудно найти компанию, которая выполнит свои обязательства перед клиентом в полном объеме! Мы строим долгосрочные взаимоотношения с клиентами и партнерами.<br>
                    Готовы рассмотреть Ваши взаимовыгодные предложения.
                </p>
                <p class="company-desc__paragraph">
                    <b class="p-title-orange-line">Мы будем рады получить от Вас техническое задание и предоставить Вам методы его реализации.</b>
                </p>
                <p class="company-desc__paragraph" style="text-align: justify; text-indent: 0;">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <b>ООО «РИАДИ ПРО» </b>с 14 октября 2020 г., вступили в члены саморегулируемой организации <b> Ассоциация «Строители Ульяновска»</b> (СРО А «СУ»)
                    <br>
                    Регистрационный номер в государственном реестре саморегулируемых организаций: <strong><a href="/docs/sro/SRO RIADI PRO.pdf" class="">СРО-С-278-14122016.</a></strong>
                    <br>
                </p>
                <br>
            </div>
        </div>
    </div>

    <section class="company-reasons">
        <div class="container company-reasons__container">
            <h2 class="company-reasons__title p-title-orange-line">Почему мы?</h2>
            <div class="company-reasons__items--wrap">
                <div class="company-reasons__item">
                    <img src="/web/img/company-reasons__item__img/company-reasons__item__img-1.png" alt="" class="company-reasons__item__img">
                    <p class="company-reasons__item__text company-reasons__item__text--black company-reasons__item__text--bg-orange">
                        Мы предлагаем Своим партнерам качественные инженерные решения в интересующих их вопросах.
                    </p>
                </div>
                <div class="company-reasons__item company-reasons__item--center">
                    <img src="/web/img/company-reasons__item__img/company-reasons__item__img-2.png" alt="" class="company-reasons__item__img">
                    <p class="company-reasons__item__text company-reasons__item__text--white company-reasons__item__text--bg-grey">
                        Мы подходим индивидуально к каждому объекту, но имеем так же ряд готовых решений, способных
                        удовлетворить самые сложные требования.
                    </p>
                </div>
                <div class="company-reasons__item">
                    <img src="/web/img/company-reasons__item__img/company-reasons__item__img-3.png" alt="" class="company-reasons__item__img">
                    <p class="company-reasons__item__text company-reasons__item__text--black company-reasons__item__text--bg-orange">
                        Мы работаем с современными материалами и изделиями.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="company-feedback">
        <div class="container company-feedback__container">
            <img src="/web/img/company-feedback__img/company-feedback__img.png" alt="" class="company-feedback__img">
            <form class="company-feedback__form" action="" method="POST" enctype="multipart/form-data">
                <h2 class="company-feedback__form__title">Напишите нам</h2>
                <label for="name" class="company-feedback__label">
                    <span class="company-feedback__label__title">Имя</span>
                    <input name="name" type="text" placeholder="Введите имя" id="name">
                </label>
                <label for="mail" class="company-feedback__label">
                    <span class="company-feedback__label__title">E-mail</span>
                    <input name="email" type="email" placeholder="Введите почту" id="mail">
                </label>
                <label for="area" class="company-feedback__label">
                    <span class="company-feedback__label__title">Сообщение</span>
                    <textarea name="message" placeholder="Введите текст" id="area"></textarea>
                </label>
                <input type="submit" value="Отправить" class="company-feedback__btn">
            </form>
        </div>
    </section>
</main>
<!-- /.main -->
<section>
    <div class="company-desc">
        <div class="container company-desc__container">
            <div class="company-desc__paragraph--wrap">
                <p class="company-desc__paragraph" style="text-align: justify;">
                    Обслуживание инженерных систем имеет решающее значение для обеспечения жизнедеятельности, комфорта и безопасности функционирования любого предприятия.<br>
                    <i class="fa fa-eercast" aria-hidden="true"></i>Профессионально организованные плановые и аварийные работы по обслуживанию инженерных систем и оборудования позволяют обеспечить оптимальное соотношение «цены и качества» предоставляемых услуг, а также обеспечить экономическую эффективность в функционировании.<br>
                    <i class="fa fa-eercast" aria-hidden="true"></i>Актуальная исполнительная документация на каждом объекте – фундамент качественной эксплуатации, долговечности и безотказности установленных инженерных систем. Специалисты ООО "РИАДИ ПРО" актуализируют, систематизируют и содержат существующую документацию в полном соответствии с текущей ситуацией.<br>
                    <i class="fa fa-eercast" aria-hidden="true"></i>Мы осуществляем приемку инженерных систем и оборудования в эксплуатацию, производим техническое обслуживание, направленное на поддержание эффективной работы систем здания, оптимизацию затрат на содержание и эксплуатацию объектов.
            </div>
        </div>
    </div>
</section>
