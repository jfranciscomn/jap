<?php
$this->pageCaption='Crear Presupuesto';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo presupuesto';
$this->breadcrumbs=array(
	Institucion::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.Institucion::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.Institucion::classNameLabel(), 'url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_presupuestoegreso', array(
'modelGastoDeAdministracion'=>$modelGastoDeAdministracion,
'modelGastoOperativo'=>$modelGastoOperativo,
)); ?>