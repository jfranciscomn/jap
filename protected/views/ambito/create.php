<?php
$this->pageCaption='Crear '. Ambito::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.Ambito::classNameLabel();
$this->breadcrumbs=array(
	Ambito::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.Ambito::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.Ambito::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>