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
                        <div class="card-r">
                            <div class="top">
                                <img src="img/png/an1.png" alt="">
                            </div>
                            <p class="txt-20">
                                Высокое качество
                            </p>
                        </div>
                        <div class="card-r">
                            <div class="top">
                                <img src="img/png/an3.png" alt="">
                            </div>
                            <p class="txt-20">
                                Высокое качество
                            </p>
                        </div>
                        <div class="card-r">
                            <div class="top">
                                <img src="img/png/an3.png" alt="">
                            </div>
                            <p class="txt-20">
                                Высокое качество
                            </p>
                        </div>

                        <div class="card-r">
                            <div class="top">
                                <img src="img/png/an4.png" alt="">
                            </div>
                            <p class="txt-20">
                                Высокое качество
                            </p>
                        </div>
                        <div class="card-r">
                            <div class="top">
                                <img src="img/png/an5.png" alt="">
                            </div>
                            <p class="txt-20">
                                Высокое качество
                            </p>
                        </div>
                        <div class="card-r">
                            <div class="top">
                                <img src="img/png/an6.png" alt="">
                            </div>
                            <p class="txt-20">
                                Высокое качество
                            </p>
                        </div>
                        <div class="card-r">
                            <div class="top">
                                <img src="img/png/an7.png" alt="">
                            </div>
                            <p class="txt-20">
                                Высокое качество
                            </p>
                        </div>
                        <div class="card-r">
                            <div class="top">
                                <img src="img/png/an8.png" alt="">
                            </div>
                            <p class="txt-20">
                                Высокое качество
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>