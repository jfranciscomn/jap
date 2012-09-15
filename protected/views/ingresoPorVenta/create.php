<?php
$this->pageCaption='Crear '. IngresoPorVenta::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.IngresoPorVenta::classNameLabel();
$this->breadcrumbs=array(
	IngresoPorVenta::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorVenta::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.IngresoPorVenta::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>