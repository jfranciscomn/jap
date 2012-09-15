<?php
$this->pageCaption='Actualizar '.EjercicioFiscal::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	EjercicioFiscal::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.EjercicioFiscal::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. EjercicioFiscal::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. EjercicioFiscal::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. EjercicioFiscal::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>