<?php
$this->pageCaption='Actualizar '.IngresoPorEvento::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	IngresoPorEvento::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorEvento::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. IngresoPorEvento::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. IngresoPorEvento::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. IngresoPorEvento::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>