<?php

use common\models\Rent;
use common\models\RentItem;

$rents = Rent::find()->andWhere(['status' => Rent::STATUS_ACTIVE])->all();
$rent_items = RentItem::find()->all();
?>
<!-- //arenda-count -->

<div class="purches ab  ">
    <div class="my-container">
        <div class="purches-in">
            <?php foreach ($rents as $rent): ?>
                <h1 class="txt-38">
                    <?= $rent->title ?>
                </h1>
                <p class="txt-18 sec-p">
                    <?= $rent->short_description ?>
                </p>
                <div class="purches-main">
                    <div class="card-p">
                        <p class="txt-23 top-p">
                            Печать на баннере
                        </p>
                        <h1 class="txt-40 main-p">
                            <?= $rent->cost ?> <span class="txt-23">/  <?= $rent->type ?></span>
                        </h1>
                        <a class="btn-glavni txt-18 konsul">
                            Заказать услугу
                        </a>
                        <?php foreach ($rent_items as $item): ?>
                            <p class="txt-16 bottom-p">
                                <span></span>
                                <?= $item->title ?> <strong>  <?= $item->cost ?> / <?= $rent->type ?></strong>
                            </p>
                            <p class="txt-16 bottom-p">
                                <span></span>
                                <?= $item->title ?> <strong> <?= $item->cost ?> / <?= $rent->type ?></strong>
                            </p>
                            <p class="txt-16 bottom-p">
                                <span></span>
                                <?= $item->title ?> <strong><?= $item->cost ?> / <?= $rent->type ?></strong>
                            </p>
                            <p class="txt-16 bottom-p">
                                <span></span>   <?= $item->title?><strong> <?= $item->cost ?> / <?= $rent->type ?></strong>
                            </p>
                        <?php endforeach; ?>
                    </div>    <div class="card-p">
                        <p class="txt-23 top-p">
                            Печать на баннере
                        </p>
                        <h1 class="txt-40 main-p">
                            <?= $rent->cost ?> <span class="txt-23">/  <?= $rent->type ?></span>
                        </h1>
                        <a class="btn-glavni txt-18 konsul">
                            Заказать услугу
                        </a>
                        <?php foreach ($rent_items as $item): ?>
                            <p class="txt-16 bottom-p">
                                <span></span>
                                <?= $item->title ?> <strong>  <?= $item->cost ?> / <?= $rent->type ?></strong>
                            </p>
                            <p class="txt-16 bottom-p">
                                <span></span>
                                <?= $item->title ?> <strong> <?= $item->cost ?> / <?= $rent->type ?></strong>
                            </p>
                            <p class="txt-16 bottom-p">
                                <span></span>
                                <?= $item->title ?> <strong><?= $item->cost ?> / <?= $rent->type ?></strong>
                            </p>
                            <p class="txt-16 bottom-p">
                                <span></span>   <?= $item->title?><strong> <?= $item->cost ?> / <?= $rent->type ?></strong>
                            </p>
                        <?php endforeach; ?>
                    </div>    <div class="card-p">
                        <p class="txt-23 top-p">
                            Печать на баннере
                        </p>
                        <h1 class="txt-40 main-p">
                            <?= $rent->cost ?> <span class="txt-23">/  <?= $rent->type ?></span>
                        </h1>
                        <a class="btn-glavni txt-18 konsul">
                            Заказать услугу
                        </a>
                        <?php foreach ($rent_items as $item): ?>
                            <p class="txt-16 bottom-p">
                                <span></span>
                                <?= $item->title ?> <strong>  <?= $item->cost ?> / <?= $rent->type ?></strong>
                            </p>
                            <p class="txt-16 bottom-p">
                                <span></span>
                                <?= $item->title ?> <strong> <?= $item->cost ?> / <?= $rent->type ?></strong>
                            </p>
                            <p class="txt-16 bottom-p">
                                <span></span>
                                <?= $item->title ?> <strong><?= $item->cost ?> / <?= $rent->type ?></strong>
                            </p>
                            <p class="txt-16 bottom-p">
                                <span></span>   <?= $item->title?><strong> <?= $item->cost ?> / <?= $rent->type ?></strong>
                            </p>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>