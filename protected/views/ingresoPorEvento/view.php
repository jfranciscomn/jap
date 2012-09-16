<?php
$this->pageCaption='Ver '.IngresoPorEvento::classNameLabel().' #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	IngresoPorEvento::classNameLabel()=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorEvento::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. IngresoPorEvento::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Actualizar '. IngresoPorEvento::classNameLabel(), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar '. IngresoPorEvento::classNameLabel(), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar '.IngresoPorEvento::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'colectas',
		'eventos',
		'rifas',
		'desayunos',
		'conferencias',
		array(	'name'=>'institucion_aid',
		        'value'=>$model->institucion->nombre,),
		array(	'name'=>'ejercicioFiscal_did',
		        'value'=>$model->ejercicioFiscal->nombre,),
		array(	'name'=>'estatus_did',
		        'value'=>$model->estatus->nombre,),
		'editable',
		'ultimaModificacion_dt',
	),
)); ?>