<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label="$this->modelClass::classNameLabel()";
echo "\$this->pageCaption='Actualizar '.{$label}.' '.\$model->{$this->tableSchema->primaryKey};
\$this->pageTitle=Yii::app()->name . ' - ' . \$this->pageCaption;
\$this->pageDescription='';
\$this->breadcrumbs=array(
	$label=>array('index'),
	\$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
	'Actualizar',
);\n";
?>

$this->menu=array(
	array('label'=>'Listar '.<?php echo $label; ?>, 'url'=>array('index')),
	array('label'=>'Crear '. <?php echo $label; ?>, 'url'=>array('create')),
	array('label'=>'Ver '. <?php echo $label; ?>, 'url'=>array('view', 'id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'Administrar '. <?php echo $label; ?>, 'url'=>array('admin')),
);
?>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
