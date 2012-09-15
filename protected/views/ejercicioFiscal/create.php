<?php
$this->pageCaption='Crear '. EjercicioFiscal::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.EjercicioFiscal::classNameLabel();
$this->breadcrumbs=array(
	EjercicioFiscal::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.EjercicioFiscal::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.EjercicioFiscal::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>