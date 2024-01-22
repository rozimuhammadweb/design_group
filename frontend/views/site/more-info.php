<div class="main-page-content about-padding">
    <div class="my-container">
        <div class="main-content-in">
            <div class="sec-content ab">
                <h3 class="pb-2">
                    <?= $work->title ?>
                </h3>
                <div class="top">
                    <img src="<?= $work->getUploadUrl('image') ?>" alt="img">
                </div>
                <p class="txt-20">
                    <?= $work->title ?>
                </p>
            </div>
            <div class="sidebar-content">
                <div class="cards-blog ab">
                    <h1 class="txt-23">
                        <?= Yii::t('app', 'services') ?>
                    </h1>
                    <?php foreach ($allService as $services): ?>
                        <a href="<?= \yii\helpers\Url::to(['site/services', 'id' => $services->id]) ?>) ?>"
                           class="card-s">
                            <div class="left">
                                <img src="/img/png/s1.png" alt="">
                            </div>
                            <h1 class="txt-18">
                                <?= $services->title ?>
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