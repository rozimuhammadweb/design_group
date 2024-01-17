<?php

use common\models\About;
use yii\helpers\Url;

$about = About::getAbout();
?>
<!-- //about-page -->

<div class="about ab">
    <div class="my-container">
        <div class="about-in">

            <div class="about-in-left">
                <img src="<?= $about->getImage() ?>" alt="" class="img1">
                <img src="<?= $about->getImage() ?>" alt="" class="img2">
                <img src="<?= $about->getImage() ?>" alt="" class="img3">
            </div>
            <div class="about-in-right">
                <h2 class="txt-38">
                    <?= $about->title ?>
                </h2>
                <p class="txt-20">
                    <?= $about->short_description ?>
                </p>
                <a href="<?= Url::to('site/about') ?>" class="btn-glavni txt-18">
                    <?= Yii::t('app', 'details') ?>
                </a>
                <div class="bottom-crs">
                    <div class="counter-card">
                        <p class="txt-40"><span class="counter"
                                                data-count=" <?= $about->successful_project ?>"></span>+
                        </p>
                        <p class="txt-16">
                            <?= Yii::t('app', 'finished') ?>
                        </p>
                    </div>
                    <div class="counter-card">
                        <p class="txt-40"><span class="counter"
                                                data-count=" <?= $about->regular_customer ?>"></span>+
                        </p>
                        <p class="txt-16">
                            <?= Yii::t('app', 'clients') ?>
                        </p>
                    </div>
                    <div class="counter-card">
                        <p class="txt-40"><span class="counter" data-count=" <?= $about->quality_service ?>"></span>+
                        </p>
                        <p class="txt-16">
                            <?= Yii::t('app', 'quality') ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
