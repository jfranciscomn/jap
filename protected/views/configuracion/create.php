<?php
$this->pageCaption='Crear '. Configuracion::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.Configuracion::classNameLabel();
$this->breadcrumbs=array(
	Configuracion::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.Configuracion::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.Configuracion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>