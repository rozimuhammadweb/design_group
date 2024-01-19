<?php
use common\models\Rent;
$rents = Rent::getRent();

?>
<div class="purches ab">
    <div class="my-container">
        <div class="purches-in">
            <h1 class="txt-38">
                <?= Yii::t('app', 'rent') ?>
            </h1>
            <p class="txt-18 sec-p">
                <?= Yii::t('app', 'rent-title') ?>
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
                            <?= Yii::t('app', 'order') ?>
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
