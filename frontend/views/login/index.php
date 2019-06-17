<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '登录';

?>
<div class="site-login">
<?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'fieldConfig' => [
            'labelOptions' => ['class' => 'login-label'],  //修改label的样式
        ]
]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <div class="form-group submit">
        <?= Html::submitButton('登录', ['class' => 'submit-button', 'name' => 'login-button']) ?>
    </div>

<?php ActiveForm::end();?>
</div>


