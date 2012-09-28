<?php
$this->pageCaption='Ver '.Inversion::classNameLabel().' #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	Inversion::classNameLabel()=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar '.Inversion::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. Inversion::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Actualizar '. Inversion::classNameLabel(), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar '. Inversion::classNameLabel(), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar '.Inversion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'terrenos',
		'muebles',
		'vehiculosServicio',
		'vehiculosAdministrativos',
		'otros',
		array(	'name'=>'institucion_aid',
		        'value'=>$model->institucion->nombre,),
		array(	'name'=>'estatus_did',
		        'value'=>$model->estatus->nombre,),
		array(	'name'=>'ejercicio_did',
		        'value'=>$model->ejercicio->nombre,),
		'editable',
		'ultimaModificacion_dt',
	),
)); ?>
