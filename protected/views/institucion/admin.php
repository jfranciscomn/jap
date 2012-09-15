<?php
$this->pageCaption='Administrar '.Institucion::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Administrar '.Institucion::classNameLabel();
$this->breadcrumbs=array(
	Institucion::classNameLabel()=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar '.Institucion::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '.Institucion::classNameLabel(), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('institucion-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'institucion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
	'itemsCssClass'=>'table  table-striped',
	'columns'=>array(
		'id',
		'nombre',
		'siglas',
		'mision',
		'vision',
		'domicioDireccion',
		/*
		'domicilioCP',
		array(	'name'=>'domicilioMunicipio_aid',
		        'value'=>'$data->domicilioMunicipio->nombre',
			    'filter'=>CHtml::listData(Municipio::model()->findAll(), 'id', 'nombre'),),
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
		        'value'=>'$data->ambito->nombre',
			    'filter'=>CHtml::listData(Ambito::model()->findAll(), 'id', 'nombre'),),
		array(	'name'=>'areageografica_did',
		        'value'=>'$data->areageografica->nombre',
			    'filter'=>CHtml::listData(AreaGeografica::model()->findAll(), 'id', 'nombre'),),
		'horasPromedio_trabajador',
		array(	'name'=>'estatus_did',
		        'value'=>'$data->estatus->nombre',
			    'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
