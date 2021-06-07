<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Barang;
use app\models\Jenis;
use app\models\Supplier;
?>
<div class="supplier-form">
    <div class="col-md-6">
    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'id')->textInput()?>
        <?= $form->field($model, 'nama_supplier')->textInput()?>
        <?= $form->field($model, 'notelp')->textInput()?>
        <?= $form->field($model,'email')->textInput()?>
        <?= $form->field($model, 'alamat')->textInput()?>        
    
        <div class="form-group">
            <div>
            <?=Html::submitButton('Save',['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
    </div>

</div>
