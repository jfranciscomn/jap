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
	
	<style>
		.navbar-inner{
			background: rgb(37,141,200); /* Old browsers */
			/* IE9 SVG, needs conditional override of 'filter' to 'none' */
			background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzI1OGRjOCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMyNThkYzgiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
			background: -moz-linear-gradient(top,  rgba(37,141,200,1) 0%, rgba(37,141,200,1) 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(37,141,200,1)), color-stop(100%,rgba(37,141,200,1))); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  rgba(37,141,200,1) 0%,rgba(37,141,200,1) 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  rgba(37,141,200,1) 0%,rgba(37,141,200,1) 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  rgba(37,141,200,1) 0%,rgba(37,141,200,1) 100%); /* IE10+ */
			background: linear-gradient(to bottom,  rgba(37,141,200,1) 0%,rgba(37,141,200,1) 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#258dc8', endColorstr='#258dc8',GradientType=0 ); /* IE6-8 */


		}
		.navbar .nav > li > a {
		  color:white;
		  float:none;
		  line-h	eight:19px;
		  padding:10px 10px 11px;
		  text-decoration:none;
		  text-shadow:rgba(0, 0, 0, 0.247059) 0 -1px 0;
		}

	</style>

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
										array('label'=>'Institución', 'url'=>array('/institucion/index')),
										array('label'=>'Municipio', 'url'=>array('/municipio/index')),										
										array('label'=>'Tipo de Usuario', 'url'=>array('/tipousuario/index')),
										array('label'=>'Usuario', 'url'=>array('/usuario/index')),
									),
									'visible'=>!Yii::app()->user->isGuest
								),								
								array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
								array('label'=>'Contacto', 'url'=>array('/site/contact')),
						);
					}
					elseif(isset($usuarioActual) && $usuarioActual->tipousuario->nombre == 'Institucion'){
						$items=array(
							array('label'=>'Inicio', 'url'=>array('site/index')),							
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
						array('label'=>'Bienvenido ' . Yii::app()->user->name, 'url'=>array(), 'visible'=>!Yii::app()->user->isGuest),
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
			<p>Copyright &copy; <?php echo date('Y'); ?> by Cidesoft.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?></p>
		</div>
	</footer>
	
</body>
</html>