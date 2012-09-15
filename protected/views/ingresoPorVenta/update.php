<?php
$this->pageCaption='Actualizar '.IngresoPorVenta::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	IngresoPorVenta::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorVenta::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. IngresoPorVenta::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. IngresoPorVenta::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. IngresoPorVenta::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>