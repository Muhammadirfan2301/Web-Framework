<?php
namespace app\models;

use yii\db\ActiveRecord;

/**
 * 
 */
class supplier extends ActiveRecord
{

	
	public static function tableName()
	{
		return 'Supplier';
	}
	public function rules()
	{
		return [
			[['id','nama_supplier','notelp','email','alamat'], 'required'],
			[['nama_supplier', 'notelp','email','alamat'], 'string'],
			[['id'], 'integer'],
		];
	}
}
?>