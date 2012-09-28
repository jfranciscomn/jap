<?php
$this->pageCaption='Crear '. EjercicioFiscal::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.EjercicioFiscal::classNameLabel();
$this->breadcrumbs=array(
	EjercicioFiscal::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Ejercicio Fiscal', 'url'=>array('index')),
	array('label'=>'Administrar Ejercicio Fiscal', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>