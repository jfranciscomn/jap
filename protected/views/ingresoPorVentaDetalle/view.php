<?php
$this->pageCaption='Ver '.IngresoPorVentaDetalle::classNameLabel().' #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	IngresoPorVentaDetalle::classNameLabel()=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorVentaDetalle::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. IngresoPorVentaDetalle::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Actualizar '. IngresoPorVentaDetalle::classNameLabel(), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar '. IngresoPorVentaDetalle::classNameLabel(), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar '.IngresoPorVentaDetalle::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'concepto',
		'cantidad',
		array(	'name'=>'ingresoPorVenta_aid',
		        'value'=>$model->ingresoPorVenta->nombre,),
		array(	'name'=>'estatus_did',
		        'value'=>$model->estatus->nombre,),
	),
)); ?>
