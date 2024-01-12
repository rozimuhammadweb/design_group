<?php

use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Settings $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sozlamalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card card-primary card-outline ">
    <div class="card-body">
        <div class="settings-view">
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
                    'company_info:raw',
                    'working_time:raw',
                    'address:raw',
                    'number',
                    'email:email',
                    [
                        'attribute' => 'logo',
                        'format' => 'raw',
                        'value' => function ($model) {
                            return Html::img($model->getUploadUrl('logo'), ['class' => 'img-thumbnail', 'style' => 'width:200px ']);
                        },
                    ],
                    [
                        'attribute' => 'status',
                        'value' => function ($model) {
                            return $model->status == 1 ? 'Active' : 'In Active';
                        },
                    ],
                    [
                        'attribute' => 'created_by',
                        'value' => function ($model) {
                            return $model->createdByUser ? $model->createdByUser->first_name : 'N/A';
                        },
                    ],
                    [
                        'attribute' => 'updated_by',
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