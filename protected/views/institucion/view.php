<?php
$this->pageCaption='Ver Institución #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	Institucion::classNameLabel()=>array('index'),
	$model->id,
);
$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
if($usuarioActual->tipousuario->nombre == 'Administrador')
{
	$this->menu=array(
		array('label'=>'Listar Institución', 'url'=>array('index')),
		array('label'=>'Crear Institución', 'url'=>array('create')),
		array('label'=>'Actualizar Institución', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Eliminar Institución', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro que quieres eliminar este elemento?')),
		array('label'=>'Filtrar Institución', 'url'=>array('admin')),
	);
}
else
{
	$this->menu=array(
		array('label'=>'Inicio', 'url'=>array('site/index'))
	);

}
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'nombre',
		'siglas',
		'mision',
		'vision',
		'domicioDireccion',
		'domicilioCP',
		array(	'name'=>'domicilioMunicipio_aid',
		        'value'=>$model->domicilioMunicipio->nombre,),
		'contactoTelefono',
		'contactoFax',
		'contactoEmail',
		'fechaConstitucion_dt',
		'fechaTransformacion_dt',
		'rfc',
		'donativoDeducible',
		'donativoConvenio',
		'cluni',
		array(	'name'=>'ambito_did',
		        'value'=>$model->ambito->nombre,),
		array(	'name'=>'areageografica_did',
		        'value'=>$model->areageografica->nombre,),
		'horasPromedio_trabajador',
		array(	'name'=>'estatus_did',
		        'value'=>$model->estatus->nombre,),
	),
)); ?>
