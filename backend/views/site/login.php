<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */

/** @var \common\models\LoginForm $model */

use yii\bootstrap\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
?>
<div class="site-login">
    <div class="mt-5 offset-lg-3 col-lg-6">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Admin</b>Panel</a>
            </div>
            <div class="card-body ">
                <p class="login-box-msg">Please fill out the following fields to login:</p>

                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <div class="input-group mb-3 justify-content-center">
                    <?= $form->field($model, 'username', [
                        'inputOptions' => ['style' => 'width: 400px;', 'placeholder' => 'Enter your username',],
                    ])->textInput(['autofocus' => true])->label(false) ?>
                </div>
                <div class="input-group mb-3 justify-content-center">
                    <?= $form->field($model, 'password', [
                        'inputOptions' => ['style' => 'width: 400px;', 'placeholder' => 'Enter your password',],
                    ])->passwordInput()->label(false) ?>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <?= $form->field($model, 'rememberMe')->checkbox() ?>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                    </div>
                    <!-- /.col -->
                </div>
                <?php ActiveForm::end(); ?>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-info">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>


                <p class="mb-1">
                    <a href="">I forgot my password</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

<!--<div class="site-login">-->
<!--    <div class="mt-5 offset-lg-3 col-lg-6">-->
<!--        <h1>--><? //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--        <p>Please fill out the following fields to login:</p>-->
<!---->
<!--        --><?php //$form = ActiveForm::begin(['id' => 'login-form']); ?>
<!---->
<!--            --><? //= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<!---->
<!--            --><? //= $form->field($model, 'password')->passwordInput() ?>
<!---->
<!--            --><? //= $form->field($model, 'rememberMe')->checkbox() ?>
<!---->
<!--            <div class="form-group">-->
<!--                --><? //= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
<!--            </div>-->
<!---->
<!--        --><?php //ActiveForm::end(); ?>
<!--    </div>-->
<!--</div>-->
