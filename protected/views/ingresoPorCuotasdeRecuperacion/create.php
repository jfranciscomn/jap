<?php
$this->pageCaption='Crear '. IngresoPorCuotasdeRecuperacion::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.IngresoPorCuotasdeRecuperacion::classNameLabel();
$this->breadcrumbs=array(
	IngresoPorCuotasdeRecuperacion::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorCuotasdeRecuperacion::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.IngresoPorCuotasdeRecuperacion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>