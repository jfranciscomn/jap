<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/application.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-114x114.png">
</head>

<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="<?php echo $this->createAbsoluteUrl('//'); ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
				<?php 
					$items = array();
					$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
					//echo '<pre>'; print_r($usuarioActual->attributes); echo '</pre>';
					//exit;
					if(isset($usuarioActual) && $usuarioActual->tipousuario->nombre == 'Administrador'){
						$items=	array(
								array('label'=>'Inicio', 'url'=>array('site/index')),
								array('label'=>'Catálogos', 
									'url'=>'#',
									'itemOptions'=>array('class'=>'dropdown','id'=>'home'),
									'linkOptions'=>array('class'=>'dropdown-toggle', 'data-toggle'=>'dropdown'),
									'submenuOptions'=>array('class'=>'dropdown-menu'),
									'items'=>array(
										array('label'=>'Ámbito', 'url'=>array('/ambito/index')),
										array('label'=>'Área Geográfica', 'url'=>array('/areageografica/index')),
										array('label'=>'Ejercicio Fiscal', 'url'=>array('/ejerciciofiscal/index')),
										array('label'=>'Estado', 'url'=>array('/estado/index')),
										array('label'=>'Estatus', 'url'=>array('/estatus/index')),
										array('label'=>'Gasto de Administración', 'url'=>array('/gastodeadministracion/index')),
										array('label'=>'Gasto Operativo', 'url'=>array('/gastooperativo/index')),
										array('label'=>'Ingreso Por Cuotas de Recuperación', 'url'=>array('/ingresoporcuotasderecuperacion/index')),
										array('label'=>'Ingreso Por Donativo', 'url'=>array('/ingresopordonativo/index')),
										array('label'=>'Ingreso Por Evento', 'url'=>array('/ingresoporevento/index')),
										array('label'=>'Ingreso Por Venta', 'url'=>array('/ingresoporventa/index')),
										array('label'=>'Ingreso Por Venta Detalle', 'url'=>array('/ingresoporventadetalle/index')),
										array('label'=>'Institución', 'url'=>array('/institucion/index')),
										array('label'=>'Municipio', 'url'=>array('/municipio/index')),										
										array('label'=>'Tipo de Usuario', 'url'=>array('/tipousuario/index')),
										array('label'=>'Usuario', 'url'=>array('/usuario/index')),
									),
									'visible'=>!Yii::app()->user->isGuest
								),				
								array('label'=>'Presupuesto', 'url'=>array('institucion/crear')),			
								array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
								array('label'=>'Contacto', 'url'=>array('/site/contact')),
						);
					}
					elseif(isset($usuarioActual) && $usuarioActual->tipousuario->nombre == 'Maestro'){
						$items=array(
							array('label'=>'Mis Materias', 'url'=>array('/site/index')),
							array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Contacto', 'url'=>array('/site/contact')),
						);
					}					
					$items[]=array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest);
								
					$this->widget('ext.custom.widgets.BMenu',array(
						'items'=>$items,
						 'activateParents'=>true,
						'activeCssClass'=>'',
						'htmlOptions'=>array(
							'class'=>'nav nav-pills',
						),
					)); 
				?>

				<?php 
				//echo '<pre>'; print_r($usuarioActual->tipoUsuario); echo '</pre>';
				$this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Bienvenido ' . Yii::app()->user->name, 'url'=>array('site/profile'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Cerrar Sesión', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'htmlOptions'=>array('class'=>'btn'))
					),
					'htmlOptions'=>array(
						'class'=>'nav pull-right',
					),
				)); ?>				
			</div>
		</div>
	</div>
	
	<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('BBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'separator'=>' / ',
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	</div>
	
	<?php echo $content; ?>
	
	<footer class="footer">
		<div class="container">
			<p>Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?></p>
		</div>
	</footer>
	
</body>
</html>