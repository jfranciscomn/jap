<?php
$this->pageCaption='Crear '. AreaGeografica::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.AreaGeografica::classNameLabel();
$this->breadcrumbs=array(
	AreaGeografica::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.AreaGeografica::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.AreaGeografica::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>