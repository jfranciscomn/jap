<?php
$this->pageCaption='Actualizar '.IngresoPorCuotasdeRecuperacion::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	IngresoPorCuotasdeRecuperacion::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorCuotasdeRecuperacion::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. IngresoPorCuotasdeRecuperacion::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. IngresoPorCuotasdeRecuperacion::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. IngresoPorCuotasdeRecuperacion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>