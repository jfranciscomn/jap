<?php
$this->pageCaption='Actualizar '.IngresoPorVentaDetalle::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	IngresoPorVentaDetalle::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorVentaDetalle::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. IngresoPorVentaDetalle::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. IngresoPorVentaDetalle::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. IngresoPorVentaDetalle::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>