<?php
$this->pageCaption='Actualizar '.Estatus::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	Estatus::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.Estatus::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. Estatus::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. Estatus::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. Estatus::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>