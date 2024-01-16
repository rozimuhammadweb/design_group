<?php

use common\models\About;
use yii\helpers\Url;

$about = About::find()->andWhere(['status' => About::STATUS_ACTIVE])->orderBy('id DESC')->all();
?>
<!-- //about-page -->

<div class="about ab">
    <div class="my-container">
        <div class="about-in">
            <?php foreach ($about as $a): ?>
                <div class="about-in-left">
                    <img src="<?= $a->getImage()?>" alt="" class="img1">
                    <img src="<?= $a->getImage()?>" alt="" class="img2">
                    <img src="<?= $a->getImage()?>" alt="" class="img3">
                </div>
                <div class="about-in-right">
                    <h2 class="txt-38">
                        <?= $a->title ?>
                    </h2>
                    <p class="txt-20">
                        <?= $a->short_description ?>
                    </p>
                    <a href="<?= Url::to('site/about') ?>" class="btn-glavni txt-18">
                        Подробнее
                    </a>
                    <div class="bottom-crs">
                        <div class="counter-card">
                            <p class="txt-40"><span class="counter" data-count=" <?= $a->successful_project ?>"></span>+
                            </p>
                            <p class="txt-16">
                                Успешные проекты
                            </p>
                        </div>
                        <div class="counter-card">
                            <p class="txt-40"><span class="counter" data-count=" <?= $a->regular_customer ?>"></span>+
                            </p>
                            <p class="txt-16">
                                Постоянных клиентов
                            </p>
                        </div>
                        <div class="counter-card">
                            <p class="txt-40"><span class="counter" data-count=" <?= $a->quality_service ?>"></span>+
                            </p>
                            <p class="txt-16">
                                Качественные услуги
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
