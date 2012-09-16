<div class="tabbable">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Ingreso por Donativo</a></li>
    <li><a href="#tab2" data-toggle="tab">Ingreso por Cuota de Recuperación</a></li>
    <li><a href="#tab3" data-toggle="tab">Ingreso por Colecta, Eventos, Rifas</a></li>
    <li><a href="#tab4" data-toggle="tab">Ingresos por Venta en Taller Productivo</a></li>
    <li><a href="#tab5" data-toggle="tab">Gastos de Administración</a></li>
    <li><a href="#tab6" data-toggle="tab">Gastos Asistenciales/Operativos</a></li>
  </ul>
  
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
      	<p>Donativo</p>
      	<div class="form">
			<?php $form=$this->beginWidget('BActiveForm', array(
				'id'=>'ingreso-por-donativo-form',
				'enableAjaxValidation'=>false,
			)); ?>
		
			<?php $this->widget('BAlert',array(
		
				'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
			)); ?>
		
			<?php echo $form->errorSummary($modelDonativo); ?>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'personaFisica'); ?>">
				<?php echo $form->labelEx($modelDonativo,'personaFisica'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelDonativo,'personaFisica'); ?>
					<?php echo $form->error($modelDonativo,'personaFisica'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'personaMoral'); ?>">
				<?php echo $form->labelEx($modelDonativo,'personaMoral'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelDonativo,'personaMoral'); ?>
					<?php echo $form->error($modelDonativo,'personaMoral'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'fundacionesNacionales'); ?>">
				<?php echo $form->labelEx($modelDonativo,'fundacionesNacionales'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelDonativo,'fundacionesNacionales'); ?>
					<?php echo $form->error($modelDonativo,'fundacionesNacionales'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'fundacionesExtrajeras'); ?>">
				<?php echo $form->labelEx($modelDonativo,'fundacionesExtrajeras'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelDonativo,'fundacionesExtrajeras'); ?>
					<?php echo $form->error($modelDonativo,'fundacionesExtrajeras'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'fondosGubernamentales'); ?>">
				<?php echo $form->labelEx($modelDonativo,'fondosGubernamentales'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelDonativo,'fondosGubernamentales'); ?>
					<?php echo $form->error($modelDonativo,'fondosGubernamentales'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'especie'); ?>">
				<?php echo $form->labelEx($modelDonativo,'especie'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelDonativo,'especie'); ?>
					<?php echo $form->error($modelDonativo,'especie'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'institucion_aid'); ?>">
				<?php echo $form->labelEx($modelDonativo,'institucion_aid'); ?>
				<div class="input">
					
					<?php echo  ''; ?> <?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
								'model'=>$modelDonativo, 
								'attribute'=>'institucion_aid', 
								'sourceUrl'=>Yii::app()->createUrl('institucion/autocompletesearch'), 
								'showFKField'=>false,
								'relName'=>'institucion', // the relation name defined above
								'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display
								
								'options'=>array(
									'minLength'=>1, 
								),
							)); ?>
					<?php echo $form->error($modelDonativo,'institucion_aid'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'ejercicioFiscal_did'); ?>">
				<?php echo $form->labelEx($modelDonativo,'ejercicioFiscal_did'); ?>
				<div class="input">
					
					<?php echo $form->dropDownList($modelDonativo,'ejercicioFiscal_did',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
					<?php echo $form->error($modelDonativo,'ejercicioFiscal_did'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'estatus_did'); ?>">
				<?php echo $form->labelEx($modelDonativo,'estatus_did'); ?>
				<div class="input">
					
					<?php echo $form->dropDownList($modelDonativo,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
					<?php echo $form->error($modelDonativo,'estatus_did'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'editable'); ?>">
				<?php echo $form->labelEx($modelDonativo,'editable'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelDonativo,'editable'); ?>
					<?php echo $form->error($modelDonativo,'editable'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'ultimaModificacion_dt'); ?>">
				<?php echo $form->labelEx($modelDonativo,'ultimaModificacion_dt'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelDonativo,'ultimaModificacion_dt'); ?>
					<?php echo $form->error($modelDonativo,'ultimaModificacion_dt'); ?>
				</div>
			</div>
		
			<div class="actions">
				<?php echo BHtml::submitButton($modelDonativo->isNewRecord ? 'Crear' : 'Guardar'); ?>
			</div>
		
		<?php $this->endWidget(); ?>
		
		</div><!-- form -->
    </div>
    <div class="tab-pane" id="tab2">
	    <p>Recuperación</p>	    
	    <div class="form">

			<?php $form=$this->beginWidget('BActiveForm', array(
				'id'=>'ingreso-por-cuotasde-recuperacion-form',
				'enableAjaxValidation'=>false,
			)); ?>

			<?php $this->widget('BAlert',array(
		
				'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
			)); ?>
		
			<?php echo $form->errorSummary($modelIngresoPorCuotasDeRecuperacion); ?>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorCuotasDeRecuperacion, 'consultas'); ?>">
				<?php echo $form->labelEx($modelIngresoPorCuotasDeRecuperacion,'consultas'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelIngresoPorCuotasDeRecuperacion,'consultas'); ?>
					<?php echo $form->error($modelIngresoPorCuotasDeRecuperacion,'consultas'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorCuotasDeRecuperacion, 'despensas'); ?>">
				<?php echo $form->labelEx($modelIngresoPorCuotasDeRecuperacion,'despensas'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelIngresoPorCuotasDeRecuperacion,'despensas'); ?>
					<?php echo $form->error($modelIngresoPorCuotasDeRecuperacion,'despensas'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorCuotasDeRecuperacion, 'otro'); ?>">
				<?php echo $form->labelEx($modelIngresoPorCuotasDeRecuperacion,'otro'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelIngresoPorCuotasDeRecuperacion,'otro'); ?>
					<?php echo $form->error($modelIngresoPorCuotasDeRecuperacion,'otro'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorCuotasDeRecuperacion, 'institucion_aid'); ?>">
				<?php echo $form->labelEx($modelIngresoPorCuotasDeRecuperacion,'institucion_aid'); ?>
				<div class="input">
					
					<?php echo  ''; ?> <?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
								'model'=>$modelIngresoPorCuotasDeRecuperacion, 
								'attribute'=>'institucion_aid', 
								'sourceUrl'=>Yii::app()->createUrl('institucion/autocompletesearch'), 
								'showFKField'=>false,
								'relName'=>'institucion', // the relation name defined above
								'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display
								
								'options'=>array(
									'minLength'=>1, 
								),
							)); ?>
					<?php echo $form->error($modelIngresoPorCuotasDeRecuperacion,'institucion_aid'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorCuotasDeRecuperacion, 'ejercicioFiscal_did'); ?>">
				<?php echo $form->labelEx($modelIngresoPorCuotasDeRecuperacion,'ejercicioFiscal_did'); ?>
				<div class="input">
					
					<?php echo $form->dropDownList($modelIngresoPorCuotasDeRecuperacion,'ejercicioFiscal_did',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
					<?php echo $form->error($modelIngresoPorCuotasDeRecuperacion,'ejercicioFiscal_did'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorCuotasDeRecuperacion, 'estatus_did'); ?>">
				<?php echo $form->labelEx($modelIngresoPorCuotasDeRecuperacion,'estatus_did'); ?>
				<div class="input">
					
					<?php echo $form->dropDownList($modelIngresoPorCuotasDeRecuperacion,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
					<?php echo $form->error($modelIngresoPorCuotasDeRecuperacion,'estatus_did'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorCuotasDeRecuperacion, 'editable'); ?>">
				<?php echo $form->labelEx($modelIngresoPorCuotasDeRecuperacion,'editable'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelIngresoPorCuotasDeRecuperacion,'editable'); ?>
					<?php echo $form->error($modelIngresoPorCuotasDeRecuperacion,'editable'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorCuotasDeRecuperacion, 'ultimaModificacion_dt'); ?>">
				<?php echo $form->labelEx($modelIngresoPorCuotasDeRecuperacion,'ultimaModificacion_dt'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelIngresoPorCuotasDeRecuperacion,'ultimaModificacion_dt'); ?>
					<?php echo $form->error($modelIngresoPorCuotasDeRecuperacion,'ultimaModificacion_dt'); ?>
				</div>
			</div>
		
			<div class="actions">
				<?php echo BHtml::submitButton($modelIngresoPorCuotasDeRecuperacion->isNewRecord ? 'Crear' : 'Guardar'); ?>
			</div>
		
		<?php $this->endWidget(); ?>
		
		</div><!-- form -->
  
    </div>
    <div class="tab-pane" id="tab3">
      <p>Colecta, Eventos</p>
      <div class="form">

		<?php $form=$this->beginWidget('BActiveForm', array(
			'id'=>'ingreso-por-evento-form',
			'enableAjaxValidation'=>false,
		)); ?>
	
		<?php $this->widget('BAlert',array(
	
			'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
		)); ?>
	
		<?php echo $form->errorSummary($modelIngresoPorEvento); ?>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'colectas'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'colectas'); ?>
			<div class="input">
				
				<?php echo $form->textField($modelIngresoPorEvento,'colectas'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'colectas'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'eventos'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'eventos'); ?>
			<div class="input">
				
				<?php echo $form->textField($modelIngresoPorEvento,'eventos'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'eventos'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'rifas'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'rifas'); ?>
			<div class="input">
				
				<?php echo $form->textField($modelIngresoPorEvento,'rifas'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'rifas'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'desayunos'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'desayunos'); ?>
			<div class="input">
				
				<?php echo $form->textField($modelIngresoPorEvento,'desayunos'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'desayunos'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'conferencias'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'conferencias'); ?>
			<div class="input">
				
				<?php echo $form->textField($modelIngresoPorEvento,'conferencias'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'conferencias'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'institucion_aid'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'institucion_aid'); ?>
			<div class="input">
				
				<?php echo  ''; ?> <?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
							'model'=>$modelIngresoPorEvento, 
							'attribute'=>'institucion_aid', 
							'sourceUrl'=>Yii::app()->createUrl('institucion/autocompletesearch'), 
							'showFKField'=>false,
							'relName'=>'institucion', // the relation name defined above
							'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display
							
							'options'=>array(
								'minLength'=>1, 
							),
						)); ?>
				<?php echo $form->error($modelIngresoPorEvento,'institucion_aid'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'ejercicioFiscal_did'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'ejercicioFiscal_did'); ?>
			<div class="input">
				
				<?php echo $form->dropDownList($modelIngresoPorEvento,'ejercicioFiscal_did',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
				<?php echo $form->error($modelIngresoPorEvento,'ejercicioFiscal_did'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'estatus_did'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'estatus_did'); ?>
			<div class="input">
				
				<?php echo $form->dropDownList($modelIngresoPorEvento,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
				<?php echo $form->error($modelIngresoPorEvento,'estatus_did'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'editable'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'editable'); ?>
			<div class="input">
				
				<?php echo $form->textField($modelIngresoPorEvento,'editable'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'editable'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'ultimaModificacion_dt'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'ultimaModificacion_dt'); ?>
			<div class="input">
				
				<?php echo $form->textField($modelIngresoPorEvento,'ultimaModificacion_dt'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'ultimaModificacion_dt'); ?>
			</div>
		</div>
	
		<div class="actions">
			<?php echo BHtml::submitButton($modelIngresoPorEvento->isNewRecord ? 'Crear' : 'Guardar'); ?>
		</div>
	
	<?php $this->endWidget(); ?>
	
	</div><!-- form -->

    </div>
    <div class="tab-pane" id="tab4">
      <p>Venta</p>
      <div class="form">

		<?php $form=$this->beginWidget('BActiveForm', array(
			'id'=>'ingreso-por-venta-form',
			'enableAjaxValidation'=>false,
		)); ?>

			<?php $this->widget('BAlert',array(
		
				'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
			)); ?>
		
			<?php echo $form->errorSummary($modelIngresoPorVenta); ?>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorVenta, 'id'); ?>">
				<?php echo $form->labelEx($modelIngresoPorVenta,'id'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelIngresoPorVenta,'id'); ?>
					<?php echo $form->error($modelIngresoPorVenta,'id'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorVenta, 'institucion_aid'); ?>">
				<?php echo $form->labelEx($modelIngresoPorVenta,'institucion_aid'); ?>
				<div class="input">
					
					<?php echo  ''; ?> <?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
								'model'=>$modelIngresoPorVenta, 
								'attribute'=>'institucion_aid', 
								'sourceUrl'=>Yii::app()->createUrl('institucion/autocompletesearch'), 
								'showFKField'=>false,
								'relName'=>'institucion', // the relation name defined above
								'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display
								
								'options'=>array(
									'minLength'=>1, 
								),
							)); ?>
					<?php echo $form->error($modelIngresoPorVenta,'institucion_aid'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorVenta, 'ejercicio_did'); ?>">
				<?php echo $form->labelEx($modelIngresoPorVenta,'ejercicio_did'); ?>
				<div class="input">
					
					<?php echo $form->dropDownList($modelIngresoPorVenta,'ejercicio_did',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
					<?php echo $form->error($modelIngresoPorVenta,'ejercicio_did'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorVenta, 'estatus_did'); ?>">
				<?php echo $form->labelEx($modelIngresoPorVenta,'estatus_did'); ?>
				<div class="input">
					
					<?php echo $form->dropDownList($modelIngresoPorVenta,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
					<?php echo $form->error($modelIngresoPorVenta,'estatus_did'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorVenta, 'editable'); ?>">
				<?php echo $form->labelEx($modelIngresoPorVenta,'editable'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelIngresoPorVenta,'editable'); ?>
					<?php echo $form->error($modelIngresoPorVenta,'editable'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorVenta, 'ultimaModificacion_dt'); ?>">
				<?php echo $form->labelEx($modelIngresoPorVenta,'ultimaModificacion_dt'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelIngresoPorVenta,'ultimaModificacion_dt'); ?>
					<?php echo $form->error($modelIngresoPorVenta,'ultimaModificacion_dt'); ?>
				</div>
			</div>
		
			<div class="actions">
				<?php echo BHtml::submitButton($modelIngresoPorVenta->isNewRecord ? 'Crear' : 'Guardar'); ?>
			</div>
		
		<?php $this->endWidget(); ?>
		
		</div><!-- form -->

    </div>
    <div class="tab-pane" id="tab5">
      <p>Administración</p>
      <div class="form">

			<?php $form=$this->beginWidget('BActiveForm', array(
				'id'=>'gasto-de-administracion-form',
				'enableAjaxValidation'=>false,
			)); ?>

			<?php $this->widget('BAlert',array(
		
				'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
			)); ?>
		
			<?php echo $form->errorSummary($modelGastoDeAdministracion); ?>
		
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'sueldos'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'sueldos'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoDeAdministracion,'sueldos'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'sueldos'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'honorarios'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'honorarios'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoDeAdministracion,'honorarios'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'honorarios'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'combustibles'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'combustibles'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoDeAdministracion,'combustibles'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'combustibles'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'luzTelefono'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'luzTelefono'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoDeAdministracion,'luzTelefono'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'luzTelefono'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'papeleria'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'papeleria'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoDeAdministracion,'papeleria'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'papeleria'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'impuestosDerechos'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'impuestosDerechos'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoDeAdministracion,'impuestosDerechos'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'impuestosDerechos'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'otros'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'otros'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoDeAdministracion,'otros'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'otros'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'institucion_aid'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'institucion_aid'); ?>
				<div class="input">
					
					<?php echo  ''; ?> <?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
								'model'=>$modelGastoDeAdministracion, 
								'attribute'=>'institucion_aid', 
								'sourceUrl'=>Yii::app()->createUrl('institucion/autocompletesearch'), 
								'showFKField'=>false,
								'relName'=>'institucion', // the relation name defined above
								'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display
								
								'options'=>array(
									'minLength'=>1, 
								),
							)); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'institucion_aid'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'ejercicioFisca_did'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'ejercicioFisca_did'); ?>
				<div class="input">
					
					<?php echo $form->dropDownList($modelGastoDeAdministracion,'ejercicioFisca_did',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'ejercicioFisca_did'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'estatus_did'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'estatus_did'); ?>
				<div class="input">
					
					<?php echo $form->dropDownList($modelGastoDeAdministracion,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'estatus_did'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'editable'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'editable'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoDeAdministracion,'editable'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'editable'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'ultimaModificacion_dt'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'ultimaModificacion_dt'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoDeAdministracion,'ultimaModificacion_dt'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'ultimaModificacion_dt'); ?>
				</div>
			</div>
		
			<div class="actions">
				<?php echo BHtml::submitButton($modelGastoDeAdministracion->isNewRecord ? 'Crear' : 'Guardar'); ?>
			</div>
		
		<?php $this->endWidget(); ?>
		
		</div><!-- form -->

    </div>
    <div class="tab-pane" id="tab6">
      <p>Asistenciales/Operativos</p>
      <div class="form">

			<?php $form=$this->beginWidget('BActiveForm', array(
				'id'=>'gasto-operativo-form',
				'enableAjaxValidation'=>false,
			)); ?>

			<?php $this->widget('BAlert',array(
		
				'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
			)); ?>
		
			<?php echo $form->errorSummary($modelGastoOperativo); ?>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'sueldos'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'sueldos'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoOperativo,'sueldos'); ?>
					<?php echo $form->error($modelGastoOperativo,'sueldos'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'honorarios'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'honorarios'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoOperativo,'honorarios'); ?>
					<?php echo $form->error($modelGastoOperativo,'honorarios'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'combustibles'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'combustibles'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoOperativo,'combustibles'); ?>
					<?php echo $form->error($modelGastoOperativo,'combustibles'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'luzTelefono'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'luzTelefono'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoOperativo,'luzTelefono'); ?>
					<?php echo $form->error($modelGastoOperativo,'luzTelefono'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'papeleria'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'papeleria'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoOperativo,'papeleria'); ?>
					<?php echo $form->error($modelGastoOperativo,'papeleria'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'renta'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'renta'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoOperativo,'renta'); ?>
					<?php echo $form->error($modelGastoOperativo,'renta'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'impuestosDerechos'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'impuestosDerechos'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoOperativo,'impuestosDerechos'); ?>
					<?php echo $form->error($modelGastoOperativo,'impuestosDerechos'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'otros'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'otros'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoOperativo,'otros'); ?>
					<?php echo $form->error($modelGastoOperativo,'otros'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'institucion_aid'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'institucion_aid'); ?>
				<div class="input">
					
					<?php echo  ''; ?> <?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
								'model'=>$modelGastoOperativo, 
								'attribute'=>'institucion_aid', 
								'sourceUrl'=>Yii::app()->createUrl('institucion/autocompletesearch'), 
								'showFKField'=>false,
								'relName'=>'institucion', // the relation name defined above
								'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display
								
								'options'=>array(
									'minLength'=>1, 
								),
							)); ?>
					<?php echo $form->error($modelGastoOperativo,'institucion_aid'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'ejercicioFiscal_did'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'ejercicioFiscal_did'); ?>
				<div class="input">
					
					<?php echo $form->dropDownList($modelGastoOperativo,'ejercicioFiscal_did',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
					<?php echo $form->error($modelGastoOperativo,'ejercicioFiscal_did'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'estatus_did'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'estatus_did'); ?>
				<div class="input">
					
					<?php echo $form->dropDownList($modelGastoOperativo,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
					<?php echo $form->error($modelGastoOperativo,'estatus_did'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'editable'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'editable'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoOperativo,'editable'); ?>
					<?php echo $form->error($modelGastoOperativo,'editable'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'ultimaModificacion_dt'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'ultimaModificacion_dt'); ?>
				<div class="input">
					
					<?php echo $form->textField($modelGastoOperativo,'ultimaModificacion_dt'); ?>
					<?php echo $form->error($modelGastoOperativo,'ultimaModificacion_dt'); ?>
				</div>
			</div>
		
			<div class="actions">
				<?php echo BHtml::submitButton($modelGastoOperativo->isNewRecord ? 'Crear' : 'Guardar'); ?>
			</div>
		
			<?php $this->endWidget(); ?>
		
		</div><!-- form -->

    </div>
  </div>
</div>
