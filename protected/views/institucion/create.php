<?php
$this->pageCaption='Crear '. Institucion::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.Institucion::classNameLabel();
$this->breadcrumbs=array(
	Institucion::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.Institucion::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.Institucion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>