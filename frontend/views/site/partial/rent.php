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
            <h1 class="txt-38">
                Печать на баннере
            </h1>
            <p class="txt-18 sec-p">
                Печать на баннере
            </p>
                <div class="purches-main">
                    <?php foreach ($rents as $rent): ?>
                        <div class="card-p">
                            <p class="txt-23 top-p">
                                <?= $rent->title ?>
                            </p>
                            <h1 class="txt-40 main-p">
                                <?= $rent->cost ?> <span class="txt-23">/  <?= $rent->type ?></span>
                            </h1>
                            <p class="txt-23 top-p">
                                <?= $rent->short_description ?>
                            </p>
                            <a class="btn-glavni txt-18 konsul">
                                Заказать услугу
                            </a>

                            <?php foreach ($rent->rentItems as $item): ?>
                                <p class="txt-16 bottom-p">
                                    <span></span>
                                    <?= $item->title ?> <strong>  <?= $item->cost ?> / <?= $rent->type ?></strong>
                                </p>
                            <?php endforeach; ?>

                        </div>
                    <?php endforeach; ?>


                </div>
        </div>
    </div>
</div>