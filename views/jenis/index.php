<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Data Jenis';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Data Jenis Barang</h1>
<p>
<?= Html::a('Create Jenis', ['create'],['class'=>'btn btn-primary'])?>
</p>

<table class="table table-bordered " style="text-align: center">
	<tr style="background-color: #254117;color: white;text-align: center;" >
		
		<td>Id</td>
		<td>Nama Jenis</td>
		<td>Keterangan</td>
		<td>Aksi</td>
	</tr>

	<?php 
	
	foreach ($jenis as $jenis): ?> 
		<tr style="text-align: center;">
			
			<td><?=Html::encode($jenis->id)?></td>
			<td><?= Html::encode($jenis->nama_jenis) ?></td>
			<td><?= $jenis->keterangan ?></td>
			
			<td>
				<?=Html::a('Edit',['jenis/update','id'=>$jenis->id]) ?> |
				<?=Html::a('Hapus', ['jenis/delete','id'=>$jenis->id],['onclick'=>'return(confirm("Yakin menghapus data?"))'])?>
			</td>
			
		</tr>
			
	<?php 
	
	endforeach; ?>
</table>
<?= LinkPager::widget(['pagination'=> $pagination]) ?>