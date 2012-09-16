<?php
$this->pageCaption='Crear '. IngresoPorEvento::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.IngresoPorEvento::classNameLabel();
$this->breadcrumbs=array(
	IngresoPorEvento::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorEvento::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.IngresoPorEvento::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>