<!-- //main-page -->

<div class="main-page-content">
    <div class="my-container">
        <div class="main-content-in">
            <div class="sec-content ab">
                <h1 class="txt-60">
                    <?= Yii::t('app', 'services') ?>
                </h1>

                <h2 class="txt-38">
                    <?= $service->title ?>
                </h2>
                <img src="/img/png/Rectangle 67.jpg" alt="" class="sec-img">
                <h2 class="txt-28">
                    <?= $service->short_description ?>
                </h2>
                <p class="txt-20">
                    <?= $service->description ?>
                </p>
                <button class="btn-glavni konsul txt-18">
                    <?= Yii::t('app', 'order') ?>
                </button>
            </div>
            <div class="sidebar-content">
                <div class="cards-blog ab">
                    <h1 class="txt-23">
                        <?= Yii::t('app', 'services') ?>
                    </h1>
                    <a href="#" class="card-s">
                        <div class="left">
                            <img src="/img/png/s1.png" alt="">
                        </div>
                        <h1 class="txt-18">
                            <?= $service->title ?>
                        </h1>
                    </a>
                    <a href="#" class="card-s">
                        <div class="left">
                            <img src="/img/png/s2.png" alt="">
                        </div>
                        <h1 class="txt-18">
                            <?= $service->title ?>
                        </h1>
                    </a>
                    <a href="#" class="card-s">
                        <div class="left">
                            <img src="/img/png/s3.png" alt="">
                        </div>
                        <h1 class="txt-18">
                            <?= $service->title ?>
                        </h1>
                    </a>
                    <a href="#" class="card-s">
                        <div class="left">
                            <img src="/img/png/s5.png" alt="">
                        </div>
                        <h1 class="txt-18">
                            <?= $service->title ?>
                        </h1>
                    </a>
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
