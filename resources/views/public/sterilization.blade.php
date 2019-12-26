@extends('layouts.main')

@section('content')
    <section class="sterilization page">
        <header class="sterilization__header page__header">
            <h1>Стерилизация</h1>
        </header>
        <div class="container sterilization__container sterilization__flex">
            <div class="sterilization__col-right">
                <p class="sterilization__text">
                    Стерилизация — это процесс уничтожения всех видов бактерий и вирусов с помощью физических или
                    химических
                    воздействий.</p>

                <p class="sterilization__text">Все инструменты, предназначенные для медицинских манипуляций,
                    подвергаются
                    стерилизации. В нашей клинике
                    стерилизация проводится в соответствии со стандартами, установленными ВОЗ (Всемирной Организации
                    Здравоохранения), а также с требованиями, утвержденными Приказом Роспотребнадзора.</p>

                <p class="sterilization__text">Здоровье и безопасность наших пациентов является одним из самых
                    приоритетных
                    направлений работы клиники,
                    поэтому вопросам чистоты, асептики и стерилизации мы уделяем пристальное внимание. В нашей
                    клинике
                    разработан и применяется полный комплекс мер для исключения передачи каких-либо инфекций в ходе
                    лечения
                    и предупреждения развития инфекционных осложнений.</p>
            </div>
            <div class="sterilization__col-left">
                <div class="page__image-wrapper">
                    <img src="/img/sterilization.jpg">
                </div>
            </div>
        </div>

        <div class="sterilization__wrapper">
            <div class="container sterilization__container">
                <p class="sterilization__text-strong">В нашей клинике используется пятиступенчатая программа
                    стерилизации инструментов, обеспечивающая стопроцентную безопасность</p>
                <ul class="sterilization__list">
                    <li class="sterilization__item sterilization__item--one">
                        <h3>Дезинфекция после использования</h3>
                        <p>Для дезинфекции используется высокоэффективный дезинфицирующий препарат производства
                            Швейцарии
                            «Deconex», обладающий антимикробным действием в отношении различных бактерий
                            и вирусов</p>
                    </li>
                    <li class="sterilization__item sterilization__item--two">
                        <h3>Предстерилизационная подготовка</h3>
                        <p>На этапе предстерилизационной подготовки инструменты очищаются от белковых, механических и
                            жировых отложений; после дезинфекции и очистки инструменты ополаскиваются в проточной воде,
                            сушатся и запечатываются в персональный герметичный одноразовый пакет</p>
                    </li>
                    <li class="sterilization__item sterilization__item--three">
                        <h3>Стерилизация</h3>
                        <p>В клинике Диамед для стерилизации используется метод автоклавирования. На сегодняшний день
                            этот
                            метод является наиболее безопасным и эффективным, гарантирующим полную асептику. В нашей
                            клинике
                            мы используем автоклав итальянской фирмы Mocom EXACTA с вакуумной сушкой и предварительным
                            вакуумированием, обеспечивающим стерильность материала на 100 %</p>
                    </li>
                    <li class="sterilization__item sterilization__item--four">
                        <h3>Контроль качества стерилизации</h3>
                        <p>Стерильный инструмент тестируется внутри автоклава, в самой стерильной упаковке и визуально
                            на
                            упаковке</p>
                    </li>
                    <li class="sterilization__item sterilization__item--five">
                        <h3>Хранение</h3>
                        <p>Для хранения стерильного инструмента и материалов в нашей клинике установлены бактерицидные
                            шкафы. Это позволяет предотвратить их вторичное заражение микроорганизмами и обеспечивает
                            полную
                            стерильность до момента использования</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container sterilization__container">
            <p class="sterilization__text">Подготовку проходят не только инструменты, но также кабинет и рабочее место
                стоматолога. Для обработки
                рабочих поверхностей используются дезинфицирующие одноразовые салфетки.</p>

            <p class="sterilization__text">Для обработки рук используются спиртосодержащие нетоксичные препараты
                импортного производства. При
                лечении пациентов применяются только одноразовые индивидуальные средства защиты. Особое внимание
                уделяется подготовке кабинета хирурга перед проведением стоматологических операций. Подготовка
                «стерильного стола» проводят строго в стерильных перчатках, в стерильном халате и маске.</p>

            <p class="sterilization__text sterilization__text--last">Инструменты одноразового использования
                утилизируются.
                Несколько раз в день все кабинеты клиники дезинфицируются бактерицидными рециркуляторами-облучателями.
                Используемые методы стерилизации и последующий контроль за качеством ее проведения помогают нам
                обеспечить высочайший уровень стерильности, соответствующий российским и европейским стандартам. Мы
                делаем все, чтобы лечение в нашей клинике было не только безболезненным, но и безопасным.</p>

            <p class="page__slogan">Ваши улыбки - наша работа!</p>
        </div>

    </section>
    @include ('layouts.signup-page')
@endsection