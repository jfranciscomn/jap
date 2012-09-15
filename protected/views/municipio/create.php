<?php
$this->pageCaption='Crear '. Municipio::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.Municipio::classNameLabel();
$this->breadcrumbs=array(
	Municipio::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.Municipio::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.Municipio::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>