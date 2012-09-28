<?php
$this->pageCaption='Actualizar Presupuesto Egreso';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Crear',
);

	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('site/index')),
	);
?>

<?php 
	echo $this->renderPartial('_presupuestoegreso', array(
			'modelGastoDeAdministracion'=>$modelGastoDeAdministracion,
			'modelGastoOperativo'=>$modelGastoOperativo,
		)); 
?>