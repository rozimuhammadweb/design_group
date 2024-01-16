<!-- //main-page -->

<div class="main-page-content about-padding">
    <div class="my-container">
        <div class="main-content-in">
            <?php foreach ($about as $a): ?>
                <div class="sec-content ab">
                    <h1 class="txt-60">
                        <?= $a->title ?>
                    </h1>
                    <p class="txt-20">
                        <?= $a->short_description ?>
                    </p>
                    <img src="/img/png/ab1.png" alt="" class="sec-img">
                    <p class="txt-20">
                        <?= $a->description ?>
                    </p>
                    <img src="/img/png/ab2.png" alt="" class="sec-img">
                    <div class="bottom-crs">
                        <div class="counter-card">
                            <p class="txt-40"><span class="counter" data-count="<?= $a->successful_project ?>">0</span>+
                            </p>
                            <p class="txt-16">
                                <? Yii::t('app', ' Успешные проекты') ?>
                            </p>
                        </div>
                        <div class="counter-card">
                            <p class="txt-40"><span class="counter" data-count="<?= $a->regular_customer ?>">0</span>+
                            </p>
                            <p class="txt-16">
                                Постоянных клиентов
                            </p>
                        </div>
                        <div class="counter-card">
                            <p class="txt-40"><span class="counter" data-count="<?= $a->quality_service ?>">0</span>+
                            </p>
                            <p class="txt-16">
                                Качественные услуги
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach ?>
            <div class="sidebar-content">
                <div class="cards-blog ab">
                    <h1 class="txt-23">
                        Наши услуги
                    </h1>
                    <a href="#" class="card-s">
                        <div class="left">
                            <img src="/img/png/s1.png" alt="">
                        </div>
                        <h1 class="txt-18">
                            Наружная реклама в городе
                        </h1>
                    </a>
                    <a href="#" class="card-s">
                        <div class="left">
                            <img src="/img/png/s2.png" alt="">
                        </div>
                        <h1 class="txt-18">
                            Наружная реклама в городе
                        </h1>
                    </a>
                    <a href="#" class="card-s">
                        <div class="left">
                            <img src="/img/png/s3.png" alt="">
                        </div>
                        <h1 class="txt-18">
                            Наружная реклама в городе
                        </h1>
                    </a>
                    <a href="#" class="card-s">
                        <div class="left">
                            <img src="/img/png/s5.png" alt="">
                        </div>
                        <h1 class="txt-18">
                            Наружная реклама в городе
                        </h1>
                    </a>
                    <a href="#" class="card-s">
                        <div class="left">
                            <img src="/img/png/s6.png" alt="">
                        </div>
                        <h1 class="txt-18">
                            Наружная реклама в городе
                        </h1>
                    </a>
                    <a href="#" class="card-s">
                        <div class="left">
                            <img src="/img/png/s4.png" alt="">
                        </div>
                        <h1 class="txt-18">
                            Наружная реклама в городе
                        </h1>
                    </a>
                    <a href="#" class="card-s">
                        <div class="left">
                            <img src="/img/png/s7.png" alt="">
                        </div>
                        <h1 class="txt-18">
                            Наружная реклама в городе
                        </h1>
                    </a>
                </div>
                <div class="cards-blog bottom-blog ab">
                    <h1 class="txt-23">
                        Прайслист
                    </h1>
                    <a href="#" class="back-btn txt-18">
                        <img src="/img/png/PDF_file_icon 1.png" alt="">
                        Скачать прай лист .pdf
                    </a>
                    <a href="#" class="back-btn txt-18">
                        <img src="/img/png/Microsoft_Office_Word_(2019–present) 1.png" alt="">
                        Скачать прай лист .doc
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>