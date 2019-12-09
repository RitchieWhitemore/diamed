@extends('layouts.main')

@section('content')
    <section class="slider">
        <ul id="main-slider" class="slider__list">
            <li class="slider__item">
                <picture>
                    <source media="(min-width:950px" )="" srcset="/img/slider.jpg">
                    <img src="/img/slider-mobile.png" alt="">
                </picture>
            </li>
            <li class="slider__item"><img src="/img/slider41.jpg"></li>
            <li class="slider__item"><img src="/img/slider42.jpg"></li>
            <li class="slider__item"><img src="/img/slider43.jpg"></li>
        </ul>
    </section>
    <section class="slogan">
        <h2>Ваши улыбки - наша работа!</h2>
        <button>Записаться</button>
    </section>
    <section class="services">
        <h2 class="title services__title">Наши услуги</h2>
        <div class="services__block services__block--therapy">
            <h3>Болит зуб или выпала пломба?</h3>
            <ul class="services__list">
                <li class="services__item"><a href="#" class="services__link">Диагностика</a></li>
                <li class="services__item"><a href="#" class="services__link">Лечение зубов</a></li>
                <li class="services__item"><a href="#" class="services__link">Лечение десен</a></li>
            </ul>
        </div>
        <div class="services__block services__block--surgery">
            <h3>Если зуб разрушен или отсутствует</h3>
            <ul class="services__list">
                <li class="services__item"><a href="#" class="services__link">Реставрация зубов</a></li>
                <li class="services__item"><a href="#" class="services__link">Удаление зубов</a></li>
                <li class="services__item"><a href="#" class="services__link">Имплантация зубов</a></li>
                <li class="services__item"><a href="#" class="services__link">Протезирование зубов</a></li>
            </ul>
        </div>
        <div class="services__block services__block--kids">
            <h3>Детская стоматология</h3>
            <ul class="services__list">
                <li class="services__item"><a href="#" class="services__link">Адаптация ребенка к лечению</a></li>
                <li class="services__item"><a href="#" class="services__link">Лечение без страха</a></li>
                <li class="services__item"><a href="#" class="services__link">Рекомендации родителям</a></li>
            </ul>
        </div>
        <div class="services__block services__block--cosmetology">
            <h3>Идеальная улыбка</h3>
            <ul class="services__list">
                <li class="services__item"><a href="#" class="services__link">Профилактика и гигиена</a></li>
                <li class="services__item"><a href="#" class="services__link">Лечение кариеса без сверления (метод
                        ICON)</a></li>
                <li class="services__item"><a href="#" class="services__link">Отбеливание зубов</a></li>
                <li class="services__item"><a href="#" class="services__link">Выравнивание зубов и прикуса</a></li>
            </ul>
        </div>
        <footer class="services__footer">
            <p>Не знаете какая услуга Вам подходит?</p>
            <button>Записаться на консультацию</button>
        </footer>
    </section>
    <section class="about-company">
        <h2 class="title about-company__title">О клинике</h2>
        <p class="about-company__text">Наша клиника была одной из первых современных частных клиник, появившихся в
            городе Александров. Мы занимаемся любимым делом и работаем на благо наших пациентов с 2004 года и за это
            время успели завоевать безупречную репутацию у многих пациентов.</p>
        <div class="gallery">
            <img src="/img/diamed_n.jpg">
        </div>
        <table class="about-company__info">
            <tr>
                <td>
                    15 <span>лет успешной работы</span>
                </td>
                <td>
                    18000 <span>довольных пациентов</span>
                </td>
            </tr>
            <tr>
                <td><a href="#">Лицензии</a></td>
                <td><a href="#">Стерилизация</a></td>
            </tr>
            <tr>
                <td><a href="#">Вакансии</a></td>
                <td><a href="#">Информация для клиентов</a></td>
            </tr>
        </table>
        <p class="about-company__text">Сегодня каждому хочется иметь своего грамотного стоматолога, способного
            выслушать, проконсультировать и быстро помочь в любой ситуации. Если Вам нужен настоящий семейный
            стоматолог, то обратитесь в нашу клинику и Вы найдете такого врача! Моей целью всегда было создание
            интегрированной клиники, чтобы оказывать достойную комплексную стоматологическую помощь в одном месте. И для
            достижения этой цели я подготовила команду профессионалов, готовых нести персональную ответственность за
            итоговый результат своей работы! Лечение большого количества заболеваний и патологий возможно лишь при
            согласованных действиях специалистов разного профиля: терапевта, имплантолога, пародонтолога, ортопеда,
            ортодонта. Наши пациенты получают комплексную стоматологическую помощь по индивидуальному плану,
            составленному опытными специалистами.</p>
        <div class="about-company__director director">
            <div class="director__photo"></div>
            <div>
                <p class="director__text">Я отвечаю лично за каждого нашего
                    пациента и искренне заинтересована
                    в качественном, долгосрочном
                    результате лечения.
                    Желаю всем добра и здоровья!
                </p>
                <p class="director__sign">С уважением, генеральный директор
                    Корнилова Инна Гаральдовна
                </p>
                <a href="#">Письмо директору клиники</a>
            </div>
        </div>
    </section>
    <section class="team">
        <h2 class="title team__title"></h2>
        <div class="team__member member">
            <img src="/img/kostenuk-small.jpg">
            <h3 class="member__title"><span>Костенюк</span> Александр Евгеньевич</h3>
            <p>Врач - стоматолог
                общей практики
                Заместитель главного врача
                клиники «Диамед»
            </p>
            <p>
                Окончил Московский
                медицинский стоматологический
                институт в 1981 г.
            </p>
            <button>Записаться на прием</button>
            <p>Опыт работы: 38 лет</p>
            <a href="#">Сертификаты</a>
        </div>
    </section>
    <section class="articles">
        <h2 class="articles__title title">Полезные статьи и новости</h2>
        <div class="articles__list">
            <{{--div class="articles__item">
                <img src="/img/article1.jpg">
                <h3>Секреты идеальной улыбки</h3>
            </div>
            <div class="articles__item">
                <img src="/img/article2.jpg">
                <h3>Рекомендации для пациента
                    после имплантации</h3>
            </div>
            <div class="articles__item">
                <img src="/img/article3.jpg">
                <h3>Адаптация ребенка к стоматологи-
                    ческому лечению</h3>
            </div>--}}
            <a href="#">Больше информации</a>
        </div>
    </section>
    <section class="reviews">
        <div class="reviews__list">
            <div class="reviews__item">
                <p>«У меня проблемы с прикусом и мама отправила меня в эту клинику к своему врачу, которому она
                    доверяет. Ольга Владимировна вылечила ей зубы и помогла мне. Большое спасибо!»</p>
                <ul class="reviews__rating">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <p class="reviews__author">Валерия</p>
            </div>
            <div class="reviews__item">
                <p>«После лечения мне гораздо лучше, зубы как раньше, больше не шатаются. В клинике все
                    доброжелательные, всё хорошо, мне очень понравилось»</p>
                <ul class="reviews__rating">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <p class="reviews__author">Лидия Петровна</p>
            </div>
            <div class="reviews__item">
                <p>«Ни каких сомнений не было, клиника мне очень нравится. Всё первоклассные специалисты, я ими всеми
                    очень доволен»</p>
                <ul class="reviews__rating">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <p class="reviews__author">Антон Семенов</p>
            </div>
        </div>
        <a href="#">Смотреть все отзывы</a>
        <div class="reviews__video">

        </div>
        <button>Оставить отзыв</button>
    </section>
    <section class="signup">
        <h2 class="signup__title title">Записаться на прием</h2>
        <form>
            <input type="text" name="name">
            <input type="text" name="phone">
            <input type="submit" value="Записаться">
        </form>
    </section>
    <section class="map">

    </section>
@endsection