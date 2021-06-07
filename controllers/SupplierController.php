<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Supplier;

class SupplierController extends Controller
{
	public function actionIndex()
	{
		$query =Supplier::find();
		$pagination = new Pagination([
		        'defaultPageSize'=>5,
		         'totalCount'=>$query -> count(),
		     ]);


        $supplier = $query->orderBy('id')
             ->offset($pagination->offset)
             ->limit($pagination->limit)
             ->all();
         return $this -> render('index',[
               'supplier'=> $supplier,
               'pagination'=>$pagination,
           ]);
	}

	public function actionCreate()
	{
		$model = new Supplier();
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			Yii::$app->session->setFlash('success','Data berhasil ditambahkan');
			return $this->redirect(['index']);
			//return $this->refresh();

		}
		return $this->render('create',['model'=>$model]);
	}

	public function actionUpdate($id)
	{
	$model = Supplier::findOne($id);
	if ($model->load(Yii::$app->request->post()) && $model->save()) {
	Yii::$app->session->setFlash('success','Data berhasil diubah');
	 	return $this->redirect(['index']);

	}		
	return $this->render('update',['model'=>$model]);
	}

	public function actionDelete($id)
	{
	$model = Supplier::findOne($id);
	$model -> delete();
	return $this->redirect(['index']);
	}
}