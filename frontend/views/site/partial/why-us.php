<?php

use common\models\WhyUs;

$why_us = WhyUs::find()->andWhere(['status' => WhyUs::STATUS_ACTIVE])->all();
?>

<div class="slider-bottom ab ">
    <div class="my-container">
        <div class="slider-bottom-in">
            <div class="left">
                <img src="img/png/man.png" alt="" class="left-img">
            </div>
            <div class="right">
                <?php foreach ($why_us as $why): ?>
                    <div class="right-top">
                        <h1 class="txt-38">
                            <?= $why->title ?>
                        </h1>
                        <p class="txt-16">
                            <?= $why->short_description ?>
                        </p>
                    </div>
                    <div class="bottom-cards">
                        <?php foreach ($why->getBehavior('galleryBehavior')->getImages() as $image): ?>
                            <div class="card-r">
                                <div class="top">
                                    <img src="<?= $image->getUrl('medium') ?>" alt="">
                                </div>
                                <p class="txt-20">
                                   <?= $image->name ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>