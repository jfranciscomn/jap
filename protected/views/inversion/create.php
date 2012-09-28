<?php
$this->pageCaption='Crear '. Inversion::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.Inversion::classNameLabel();
$this->breadcrumbs=array(
	Inversion::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.Inversion::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.Inversion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>