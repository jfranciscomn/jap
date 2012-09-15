<?php
$this->pageCaption='Crear '. IngresoPorDonativo::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.IngresoPorDonativo::classNameLabel();
$this->breadcrumbs=array(
	IngresoPorDonativo::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorDonativo::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.IngresoPorDonativo::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>