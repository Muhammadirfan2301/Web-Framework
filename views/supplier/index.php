<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<label><h1>Data Supplier</h1></label>
<p>
	<?= Html::a('Create Data Supplier',['create'],['class' => 'btn btn-primary']) ?>
</p>

<table class="table table-bordered" style="text-align: center">
	<tr style="background-color: #254117;color: white;">
		<td>Id</td>
		<td>Nama Supplier</td>
		<td>No Telp</td>
		<td>Email</td>
		<td>Alamat</td>
		<td>Aksi</td>
	</tr>
	<?php
	
	foreach ($supplier as $supplier) : ?>
		<tr>
			
			<td><?=Html::encode($supplier->id)?></td>
			<td><?=Html::encode($supplier->nama_supplier)?></td>
			<td><?=Html::encode($supplier->notelp)?></td>
			<td><?=Html::encode($supplier->email)?></td>
			<td><?= $supplier->alamat?></td>
			<td>
				<?= Html::a('Edit',['supplier/update','id'=>$supplier->id]) ?> |
				<?= Html::a('Hapus',['supplier/delete','id'=>$supplier->id],['onClick'=>'return(confirm("Yakin menghapus data ?"))']) ?>
			</td>
		</tr>
	<?php
	
	endforeach; ?>
</table>
<?= LinkPager::widget(['pagination'=>$pagination])?>