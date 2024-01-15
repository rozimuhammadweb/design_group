<?php

/** @var yii\web\View $this */

use frontend\widgets\About;
use frontend\widgets\Banner;
use frontend\widgets\Rent;
use frontend\widgets\Services;
use frontend\widgets\WhyUs;
use frontend\widgets\Works;

?>
<?= $this->render('partial/banner')?>
<?= $this->render('partial/about')?>
<?= $this->render('partial/services')?>
<?= $this->render('partial/why-us')?>
<?= $this->render('partial/rent')?>
<?= $this->render('partial/works')?>

