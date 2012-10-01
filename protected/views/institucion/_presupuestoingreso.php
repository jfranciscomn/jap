<div class="well">
	<div class="form">
			<?php $form=$this->beginWidget('BActiveForm', array(
				'id'=>'ingreso-por-donativo-form',
				'enableAjaxValidation'=>false,
			)); ?>
		
			<div class="alert alert-info">		  
			  <h4>Ingresos por Donativos!</h4>
			  Por favor introduzca la información que se pide a continuación.
			</div>
		
			<?php echo $form->errorSummary($modelDonativo); ?>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'personaFisica'); ?>">
				<?php echo $form->labelEx($modelDonativo,'personaFisica'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>					
					<?php echo $form->textField($modelDonativo,'personaFisica'); ?>
					<?php echo $form->error($modelDonativo,'personaFisica'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'personaMoral'); ?>">
				<?php echo $form->labelEx($modelDonativo,'personaMoral'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelDonativo,'personaMoral'); ?>
					<?php echo $form->error($modelDonativo,'personaMoral'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'fundacionesNacionales'); ?>">
				<?php echo $form->labelEx($modelDonativo,'fundacionesNacionales'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelDonativo,'fundacionesNacionales'); ?>
					<?php echo $form->error($modelDonativo,'fundacionesNacionales'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'fundacionesExtrajeras'); ?>">
				<?php echo $form->labelEx($modelDonativo,'fundacionesExtrajeras'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelDonativo,'fundacionesExtrajeras'); ?>
					<?php echo $form->error($modelDonativo,'fundacionesExtrajeras'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'fondosGubernamentalesMunicipal'); ?>">
				<?php echo $form->labelEx($modelDonativo,'fondosGubernamentalesMunicipal'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelDonativo,'fondosGubernamentalesMunicipal'); ?>
					<?php echo $form->error($modelDonativo,'fondosGubernamentalesMunicipal'); ?>
				</div>
			</div>
			
			<div class="<?php echo $form->fieldClass($modelDonativo, 'fondosGubernamentalesEstatal'); ?>">
				<?php echo $form->labelEx($modelDonativo,'fondosGubernamentalesEstatal'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelDonativo,'fondosGubernamentalesEstatal'); ?>
					<?php echo $form->error($modelDonativo,'fondosGubernamentalesEstatal'); ?>
				</div>
			</div>
			
			<div class="<?php echo $form->fieldClass($modelDonativo, 'fondosGubernamentalesFederal'); ?>">
				<?php echo $form->labelEx($modelDonativo,'fondosGubernamentalesFederal'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelDonativo,'fondosGubernamentalesFederal'); ?>
					<?php echo $form->error($modelDonativo,'fondosGubernamentalesFederal'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelDonativo, 'especie'); ?>">
				<?php echo $form->labelEx($modelDonativo,'especie'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelDonativo,'especie'); ?>
					<?php echo $form->error($modelDonativo,'especie'); ?>
				</div>
			</div>
				
			<div class="alert alert-info">		  
			  <h4>Ingresos por Cuotas de Recuperación!</h4>
			</div>
		
			<?php echo $form->errorSummary($modelIngresoPorCuotasDeRecuperacion); ?>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorCuotasDeRecuperacion, 'consultas'); ?>">
				<?php echo $form->labelEx($modelIngresoPorCuotasDeRecuperacion,'consultas'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelIngresoPorCuotasDeRecuperacion,'consultas'); ?>
					<?php echo $form->error($modelIngresoPorCuotasDeRecuperacion,'consultas'); ?>
				</div>
			</div>		
						
			<div class="alert alert-info">		  
			  <h4>Ingresos por Colectas, Eventos, Rifas, Etc.!</h4>
			</div>
		
			<?php echo $form->errorSummary($modelIngresoPorEvento); ?>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'colectas'); ?>">
				<?php echo $form->labelEx($modelIngresoPorEvento,'colectas'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelIngresoPorEvento,'colectas'); ?>
					<?php echo $form->error($modelIngresoPorEvento,'colectas'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'eventos'); ?>">
				<?php echo $form->labelEx($modelIngresoPorEvento,'eventos'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelIngresoPorEvento,'eventos'); ?>
					<?php echo $form->error($modelIngresoPorEvento,'eventos'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'rifas'); ?>">
				<?php echo $form->labelEx($modelIngresoPorEvento,'rifas'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelIngresoPorEvento,'rifas'); ?>
					<?php echo $form->error($modelIngresoPorEvento,'rifas'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'conferencias'); ?>">
				<?php echo $form->labelEx($modelIngresoPorEvento,'conferencias'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelIngresoPorEvento,'conferencias'); ?>
					<?php echo $form->error($modelIngresoPorEvento,'conferencias'); ?>
				</div>
			</div>			
					
			<div class="alert alert-info">		  
			  <h4>Gastos Asistenciales / Operativos!</h4>
			</div>
		
			<?php echo $form->errorSummary($modelGastoOperativo); ?>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'sueldos'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'sueldos'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelGastoOperativo,'sueldos'); ?>
					<?php echo $form->error($modelGastoOperativo,'sueldos'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'honorarios'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'honorarios'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>		
					<?php echo $form->textField($modelGastoOperativo,'honorarios'); ?>
					<?php echo $form->error($modelGastoOperativo,'honorarios'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'combustibles'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'combustibles'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelGastoOperativo,'combustibles'); ?>
					<?php echo $form->error($modelGastoOperativo,'combustibles'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'luzTelefono'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'luzTelefono'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelGastoOperativo,'luzTelefono'); ?>
					<?php echo $form->error($modelGastoOperativo,'luzTelefono'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'papeleria'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'papeleria'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelGastoOperativo,'papeleria'); ?>
					<?php echo $form->error($modelGastoOperativo,'papeleria'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'renta'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'renta'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelGastoOperativo,'renta'); ?>
					<?php echo $form->error($modelGastoOperativo,'renta'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'impuestosDerechos'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'impuestosDerechos'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelGastoOperativo,'impuestosDerechos'); ?>
					<?php echo $form->error($modelGastoOperativo,'impuestosDerechos'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'otros'); ?>">
				<?php echo $form->labelEx($modelGastoOperativo,'otros'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelGastoOperativo,'otros'); ?>
					<?php echo $form->error($modelGastoOperativo,'otros'); ?>
				</div>
			</div>	
					
			<div class="alert alert-info">		  
			  <h4>Gastos Administrativos!</h4>
			</div>
			
			<?php echo $form->errorSummary($modelGastoDeAdministracion); ?>
			
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'sueldos'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'sueldos'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelGastoDeAdministracion,'sueldos'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'sueldos'); ?>
				</div>
			</div>
			
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'honorarios'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'honorarios'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelGastoDeAdministracion,'honorarios'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'honorarios'); ?>
				</div>
			</div>
			
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'combustibles'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'combustibles'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelGastoDeAdministracion,'combustibles'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'combustibles'); ?>
				</div>
			</div>
			
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'luzTelefono'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'luzTelefono'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>	
					<?php echo $form->textField($modelGastoDeAdministracion,'luzTelefono'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'luzTelefono'); ?>
				</div>
			</div>
			
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'papeleria'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'papeleria'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelGastoDeAdministracion,'papeleria'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'papeleria'); ?>
				</div>
			</div>
			
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'impuestosDerechos'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'impuestosDerechos'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelGastoDeAdministracion,'impuestosDerechos'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'impuestosDerechos'); ?>
				</div>
			</div>
			
			<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'otros'); ?>">
				<?php echo $form->labelEx($modelGastoDeAdministracion,'otros'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelGastoDeAdministracion,'otros'); ?>
					<?php echo $form->error($modelGastoDeAdministracion,'otros'); ?>
				</div>
			</div>		
			
			<div class="alert alert-info">
				<h4>Inversiones!</h4>
			</div>
		
			<?php echo $form->errorSummary($modelInversion); ?>
		
			<div class="<?php echo $form->fieldClass($modelInversion, 'terrenos'); ?>">
				<?php echo $form->labelEx($modelInversion,'terrenos'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelInversion,'terrenos'); ?>
					<?php echo $form->error($modelInversion,'terrenos'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelInversion, 'inmuebles'); ?>">
				<?php echo $form->labelEx($modelInversion,'inmuebles'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelInversion,'inmuebles'); ?>
					<?php echo $form->error($modelInversion,'inmuebles'); ?>
				</div>
			</div>
			
			<div class="<?php echo $form->fieldClass($modelInversion, 'equipoOficina'); ?>">
				<?php echo $form->labelEx($modelInversion,'equipoOficina'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelInversion,'equipoOficina'); ?>
					<?php echo $form->error($modelInversion,'equipoOficina'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelInversion, 'vehiculosServicio'); ?>">
				<?php echo $form->labelEx($modelInversion,'vehiculosServicio'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelInversion,'vehiculosServicio'); ?>
					<?php echo $form->error($modelInversion,'vehiculosServicio'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelInversion, 'vehiculosAdministrativos'); ?>">
				<?php echo $form->labelEx($modelInversion,'vehiculosAdministrativos'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelInversion,'vehiculosAdministrativos'); ?>
					<?php echo $form->error($modelInversion,'vehiculosAdministrativos'); ?>
				</div>
			</div>
		
			<div class="<?php echo $form->fieldClass($modelInversion, 'otros'); ?>">
				<?php echo $form->labelEx($modelInversion,'otros'); ?>
				<div class="input-prepend">
					<span class="add-on">$</span>
					<?php echo $form->textField($modelInversion,'otros'); ?>
					<?php echo $form->error($modelInversion,'otros'); ?>
				</div>
			</div>
			
			<div class="actions">
				<?php echo BHtml::submitButton($modelDonativo->isNewRecord ? 'Mandar Informe' : 'Modificar Informe'); ?>
			</div>			
					
			<?php $this->endWidget(); ?>
		
		</div><!-- form -->
    </div>
  </div>
</div>
