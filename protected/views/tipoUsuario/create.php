<?php
$this->pageCaption='Crear '. TipoUsuario::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.TipoUsuario::classNameLabel();
$this->breadcrumbs=array(
	TipoUsuario::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.TipoUsuario::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.TipoUsuario::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>