<div class="well">
	<div class="form">
		
		<?php $form=$this->beginWidget('BActiveForm', array(
			'id'=>'gasto-de-administracion-form',
			'enableAjaxValidation'=>false,
		)); ?>
		
		<div class="alert alert-info">		  
		  <h4>Gastos Administrativos!</h4>
		  Por favor introduzca la información que se pide a continuación.
		</div>
		
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
				
		<div class="alert alert-info">		  
		  <h4>Gastos Asistenciales / Operativos!</h4>
		  Por favor introduzca la información que se pide a continuación.
		</div>
	
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
			
		<div class="actions">
			<?php echo BHtml::submitButton($modelGastoOperativo->isNewRecord ? 'Crear' : 'Guardar'); ?>
		</div>
	
		<?php $this->endWidget(); ?>
	
	</div><!-- form -->
</div>

