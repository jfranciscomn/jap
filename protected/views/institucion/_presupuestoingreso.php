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
				
			<div class="alert alert-info">		  
			  <h4>Ingresos por Cuotas de Recuperación!</h4>
			  Por favor introduzca la información que se pide a continuación.
			</div>
		
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
			
			<div class="alert alert-info">		  
			  <h4>Ingresos por Colectas, Eventos, Rifas, Etc.!</h4>
			  Por favor introduzca la información que se pide a continuación.
			</div>
		
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
			
			<div class="actions">
				<?php echo BHtml::submitButton('Mandar Presupuesto Ingreso'); ?>
			</div>				
					
			<?php $this->endWidget(); ?>
		
		</div><!-- form -->

    </div>
  </div>
</div>
