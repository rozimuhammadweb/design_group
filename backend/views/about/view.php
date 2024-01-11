<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\About $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="card card-primary card-outline ">
    <div class="card-body">
        <div class="about-view">
            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'title',
                    'short_description',
                    'description',
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
                        'attribute' => 'created_by',
                        'value' => function ($model) {
                            return $model->createdByUser ? $model->createdByUser->username : 'N/A';
                        },
                    ],
                    [
                        'attribute' => 'updated_by',
                        'value' => function ($model) {
                            return $model->createdByUser ? $model->createdByUser->username : 'N/A';
                        },
                    ],

                ],
            ]) ?>
        </div>
    </div>
</div>
