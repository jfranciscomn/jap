<?php
$this->pageCaption='Actualizar '.IngresoPorDonativo::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	IngresoPorDonativo::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorDonativo::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. IngresoPorDonativo::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. IngresoPorDonativo::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. IngresoPorDonativo::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>