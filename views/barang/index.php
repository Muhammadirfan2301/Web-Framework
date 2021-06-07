<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Data Barang';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Data Barang</h1>
<p>
	<?= Html::a('Create Barang',['create'],['class'=>'btn btn-primary']) ?>
</p>
<table class="table table-bordered" style="text-align: center">
	<tr style="background-color: #254117;color: white;"> 
		<td>No</td>
		<td>Kode Barang</td>
		<td>Nama Barang</td>
		<td>Satuan</td>
		<td>Id Jenis Barang</td>
		<td>Id Supplier</td>
		<td>Harga</td>
		<td>Stok</td>
		<td>Aksi</td>
	</tr>
	<?php 
	$no=1; 
	foreach ($barang as $barang): ?>
		<tr>
			<td><?= $no ?></td>
			<td><?= Html::encode($barang->kode_barang) ?></td>
			<td><?= Html::encode($barang->nama_barang) ?></td>
			<td><?= Html::encode($barang->satuan) ?></td>
			<td><?= $barang->id_jenis ?></td>
			<td><?= $barang->id_supplier ?></td>
			<td><?= Html::encode($barang->harga) ?></td>
			<td><?= Html::encode($barang->stok) ?></td>
			
			<td>
				<?=Html::a('Edit',['barang/update','id'=>$barang->id]) ?> | 	
				<?=Html::a('Hapus',['barang/delete','id'=>$barang->id],['onclick'=>'return(confirm("Apakah Anda ingin menghapus data ?"))']) ?>

			</td>
		</tr>
	<?php 
	$no++; 
	endforeach; ?>
</table>
<?= LinkPager::widget(['pagination'=>$pagination]) ?>