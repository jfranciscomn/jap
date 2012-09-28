<?php
$this->pageCaption='Actualizar '.Inversion::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	Inversion::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.Inversion::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. Inversion::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. Inversion::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. Inversion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>