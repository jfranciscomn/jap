<?php
$this->pageCaption='Crear '. Estatus::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.Estatus::classNameLabel();
$this->breadcrumbs=array(
	Estatus::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.Estatus::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.Estatus::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>