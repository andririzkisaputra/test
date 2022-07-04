<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\deposit\models\InvoiceForm */                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
/* @var $form ActiveForm */
?>
<div class="form-top-up">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'payCurrency')->textInput([
            'placeholder' => 'Kurensi'
        ])->label('Kurensi') ?>

        <?= $form->field($model, 'payCurrency')->textInput([
            'placeholder' => 'Jumlah yg ingin ditopup'
        ])->label('Jumlah yg ingin ditopup') ?>

        <?= $form->field($model, 'payCurrency')->textInput([
            'placeholder' => 'Keterangan'
        ])->label('Keterangan') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- form-top-up -->
