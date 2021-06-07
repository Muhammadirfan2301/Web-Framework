<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Barang;
use app\models\Jenis;
use app\models\Supplier;


$this->title = 'Entry Data Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-form">
    <div class="col-md-6">
        <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'kode_barang')->textInput()  ?>
    <?= $form->field($model, 'nama_barang')->textInput() ?>
    <?php $model->isNewRecord==1? $model->satuan='pcs': $model->satuan; ?>
    <?= $form->field($model,'satuan')->radioList(array('Pcs'=>'Pcs','Dus'=>'Dus','Pak'=>'Pak','Bal'=>'Bal'))->label('Satuan'); ?>
    <?= $form->field($model,'id_jenis')->dropDownList(ArrayHelper::map (Jenis::find()->all(),'id','nama_jenis'),['prompt'=>'Pilih Jenis'])->label('Jenis Barang'); ?>
    <?= $form->field($model,'id_supplier')->dropDownList(ArrayHelper::map (Supplier::find()->all(),'id','nama_supplier'),['prompt'=>'Pilih Supplier'])->label('Supplier Barang'); ?>
    <?= $form->field($model, 'harga')->textInput() ?>
    <?= $form->field($model, 'stok')->textinput(array('rows'=>5)); ?>

        <div class="form-group">
            <div>
            <?=Html::submitButton('Save',['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
    </div>
    

