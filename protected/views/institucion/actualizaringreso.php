<?php
$this->pageCaption='Actualizar Presupuesto Ingreso';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Crear',
);

	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('site/index')),
	);
?>


<?php echo $this->renderPartial('_presupuestoingreso', array(
'modelDonativo'=>$modelDonativo,
'modelIngresoPorCuotasDeRecuperacion'=>$modelIngresoPorCuotasDeRecuperacion,
'modelIngresoPorEvento'=>$modelIngresoPorEvento,
)); ?>