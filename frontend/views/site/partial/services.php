<?php

use common\models\Services;
use yii\helpers\Url;


$services = Services::find()->andWhere(['status' => Services::STATUS_ACTIVE])->orderBy('id DESC')->all();

?>
<div class="slider-page ab ">
    <div class="my-container">
        <div class="slider-page-in">
            <div class="top">
                <h1 class="txt-38">
                    <?= Yii::t('app', 'services') ?>
                </h1>
            </div>
            <div class="swiper slider-first my-swww">
                <div class="swiper-wrapper">
                    <?php foreach ($services  as $service): ?>
                    <a href="<?= Url::to(['site/services', 'id' => $service->id]) ?>" class="swiper-slide card-s">
                        <div class="top">
                            <div class="top-in">
                                <img src="img/png/s1.png" alt="">
<!--                                <img src="--><?php //= $service->getUploadUrl('image') ?><!--" alt="">-->
                            </div>
                        </div>
                        <p class="bottom txt-28">
                            <?= $service->title ?>
                        </p>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
