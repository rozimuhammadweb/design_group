<!-- //glavni-ekran -->

<div class="glavni">
    <ul class="slideshow">
        <li><img src="img/png/Rectangle 67.jpg" alt=""></li>
        <li><img src="img/png/colin-lloyd-dY2-VNnLmz8-unsplash.jpg" alt=""></li>
        <li><img src="img/png/eleni-afiontzi-gLU8GZpHtRA-unsplash.jpg" alt=""></li>
        <li><img src="img/png/izuddin-helmi-adnan-_0B-gHH4Nso-unsplash.jpg" alt=""></li>
        <li><img src="img/png/tania-mousinho-6tCgnd2xNfI-unsplash (1).jpg" alt=""></li>
    </ul>
    <div class="bg-glavni"></div>
    <div class="my-container">
        <div class="glavni-in">
            <div class="sec-glavni">
                <h1 class="txt-60 ab">
                    <?= Yii::t('app', 'main-title') ?>
                </h1>
                <p class="txt-18 ab2">
                    <?= Yii::t('app', 'main-description') ?>

                </p>
                <a href="<?= \yii\helpers\Url::to(['site/works']) ?>" class="btn-glavni   txt-18 ab3">
                    <?= Yii::t('app', 'all-services') ?>
                </a>
            </div>
            <a href="work.html" class="glavni-blog ab4">
                <div class="bg-img"></div>
                <img src="img/png/img-gl.png" alt="" class="right-img">
                <div class="sec-r">
                    <p class="txt-18"><?= Yii::t('app', 'design') ?></p>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M13.4697 8.53033C13.1768 8.23744 13.1768 7.76256 13.4697 7.46967C13.7626 7.17678 14.2374 7.17678 14.5303 7.46967L18.5303 11.4697C18.8232 11.7626 18.8232 12.2374 18.5303 12.5303L14.5303 16.5303C14.2374 16.8232 13.7626 16.8232 13.4697 16.5303C13.1768 16.2374 13.1768 15.7626 13.4697 15.4697L16.1893 12.75H6.5C6.08579 12.75 5.75 12.4142 5.75 12C5.75 11.5858 6.08579 11.25 6.5 11.25H16.1893L13.4697 8.53033Z"
                                fill="white"/>
                    </svg>

                </div>
            </a>
        </div>
    </div>
</div>
