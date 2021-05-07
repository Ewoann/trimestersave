<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mother */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mother-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_names')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'husband_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'husband_phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gestation_age')->textInput() ?>

    <?= $form->field($model, 'expected_date_of_delivery')->textInput() ?>

    <?= $form->field($model, 'facility')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assigned_room_midwife')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'savings_contributor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'financial_institution_partner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'community_savings_group_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'savings_target')->textInput() ?>

    <?= $form->field($model, 'cash_out_date')->textInput() ?>

    <?= $form->field($model, 'vas_preferences')->dropDownList([ 'FINANCIAL_LITERACY_TIPS' => 'FINANCIAL LITERACY TIPS', 'PREGNANCY_TIPS' => 'PREGNANCY TIPS', 'OTHER' => 'OTHER', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'other_preference')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'special_needs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assigned_staff')->textInput() ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
