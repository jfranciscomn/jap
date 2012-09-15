<?php
$this->pageCaption='Actualizar '.AreaGeografica::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	AreaGeografica::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.AreaGeografica::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. AreaGeografica::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. AreaGeografica::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. AreaGeografica::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>