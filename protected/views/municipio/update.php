<?php
$this->pageCaption='Actualizar '.Municipio::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	Municipio::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.Municipio::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. Municipio::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. Municipio::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. Municipio::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>