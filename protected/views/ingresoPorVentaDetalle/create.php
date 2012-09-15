<?php
$this->pageCaption='Crear '. IngresoPorVentaDetalle::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.IngresoPorVentaDetalle::classNameLabel();
$this->breadcrumbs=array(
	IngresoPorVentaDetalle::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorVentaDetalle::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.IngresoPorVentaDetalle::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>