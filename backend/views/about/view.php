<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\About $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Biz haqimizda', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="card card-primary card-outline ">
    <div class="card-body">
        <div class="about-view">
            <p>
                <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Haqiqatan ham bu ma\'lumotni oʻchirib tashlamoqchimisiz?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'title:raw',
                    'short_description:raw',
                    'description:raw',
                    'successful_project',
                    'regular_customer',
                    'quality_service',
                    [
                        'attribute' => 'status',
                        'value' => function ($model) {
                            return $model->status == 1 ? 'Active' : 'In Active';
                        },
                    ],
                    [
                        'attribute' => 'Yaratildi',
                        'value' => function ($model) {
                            return $model->createdByUser ? $model->createdByUser->first_name : 'N/A';
                        },
                    ],
                    [
                        'attribute' => 'Tahrirladi',
                        'value' => function ($model) {
                            return $model->createdByUser ? $model->createdByUser->first_name : 'N/A';
                        },
                    ],
                    [
                        'attribute' => 'created_at',
                        'format' => ['date', 'php:Y-m-d H:i:s'],
                    ],
                    [
                        'attribute' => 'updated_at',
                        'format' => ['date', 'php:Y-m-d H:i:s'],
                    ],

                ],
            ]) ?>
        </div>
    </div>
</div>
