<!-- //main-page -->

<div class="main-page-content about-padding">
    <div class="my-container">
        <div class="main-content-in">

            <div class="sec-content ab">
                <h1 class="txt-60">
                    <?= $about->title ?>
                </h1>
                <p class="txt-20">
                    <?= $about->short_description ?>
                </p>
                <?php foreach ($about->getBehavior('galleryBehavior')->getImages() as $image): ?>
                    <img src="<?= $image->getUrl('medium') ?>" alt="" class="sec-img">
                    <p class="txt-20">
                        <?= $about->description ?>
                    </p>
                <?php endforeach; ?>
                <div class="bottom-crs">
                    <div class="counter-card">
                        <p class="txt-40"><span class="counter" data-count="<?= $about->successful_project ?>">0</span>+
                        </p>
                        <p class="txt-16">
                            <?= Yii::t('app', 'finished') ?>
                        </p>
                    </div>
                    <div class="counter-card">
                        <p class="txt-40"><span class="counter" data-count="<?= $about->regular_customer ?>">0</span>+
                        </p>
                        <p class="txt-16">
                            <?= Yii::t('app', 'clients') ?>
                        </p>
                    </div>
                    <div class="counter-card">
                        <p class="txt-40"><span class="counter" data-count="<?= $about->quality_service ?>">0</span>+
                        </p>
                        <p class="txt-16">
                            <?= Yii::t('app', 'quality') ?>
                        </p>
                    </div>

                </div>
            </div>
            <div class="sidebar-content">
                <div class="cards-blog ab">
                    <h1 class="txt-23">
                        <?= Yii::t('app', 'services') ?>

                    </h1>
                    <?php foreach ($services as $service): ?>
                        <a href="#" class="card-s">
                            <div class="left">
                                <img src="/img/png/s1.png" alt="">
                            </div>
                            <h1 class="txt-18">
                                <?= $service->title ?>
                            </h1>
                        </a> <a href="#" class="card-s">
                            <div class="left">
                                <img src="/img/png/s1.png" alt="">
                            </div>
                            <h1 class="txt-18">
                                <?= $service->title ?>
                            </h1>
                        </a> <a href="#" class="card-s">
                            <div class="left">
                                <img src="/img/png/s1.png" alt="">
                            </div>
                            <h1 class="txt-18">
                                <?= $service->title ?>
                            </h1>
                        </a> <a href="#" class="card-s">
                            <div class="left">
                                <img src="/img/png/s1.png" alt="">
                            </div>
                            <h1 class="txt-18">
                                <?= $service->title ?>
                            </h1>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="cards-blog bottom-blog ab">
                    <h1 class="txt-23">
                        <?= Yii::t('app', 'list') ?>

                    </h1>
                    <a href="#" class="back-btn txt-18">
                        <img src="/img/png/PDF_file_icon 1.png" alt="">
                        <?= Yii::t('app', 'download') ?>

                    </a>
                    <a href="#" class="back-btn txt-18">
                        <img src="/img/png/Microsoft_Office_Word_(2019–present) 1.png" alt="">
                        <?= Yii::t('app', 'download1') ?>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>