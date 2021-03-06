<?php

class InstitucionController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('autocompletesearch'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index',
					'view',
					'create',
					'update',
					'admin',
					'delete',
					'dynamicList',
					'crearingreso',
					'crearegreso',
					'acciones',
					'termino',
					'actualizaringreso',
					'actualizaregreso',
					'reportes',
					'reportepresupuesto',
					'crearinversion',
					'actualizarinversion',
					'actualizadeducibles',
				),
				'users'=>array('@'),
			),
			/*
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),*/
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Institucion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		

		if(isset($_POST['Institucion']))
		{
			$model->attributes=$_POST['Institucion'];
			$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
			$model->usuario_did = $usuarioActual->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionCrearingreso()
	{
		$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
		$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
		
		$modelDonativo=new IngresoPorDonativo;
		$modelIngresoPorCuotasDeRecuperacion = new IngresoPorCuotasdeRecuperacion;
		$modelIngresoPorEvento = new IngresoPorEvento;
		$modelGastoDeAdministracion = new GastoDeAdministracion;
		$modelGastoOperativo = new GastoOperativo;
		$modelInversion=new Inversion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['IngresoPorDonativo'],$_POST['IngresoPorCuotasdeRecuperacion'],$_POST['IngresoPorEvento'], $_POST['GastoDeAdministracion'], $_POST['GastoOperativo']))			
		{
			$modelDonativo->attributes=$_POST['IngresoPorDonativo'];
			$modelIngresoPorCuotasDeRecuperacion->attributes=$_POST['IngresoPorCuotasdeRecuperacion'];
			$modelIngresoPorEvento->attributes = $_POST['IngresoPorEvento'];
			$modelGastoDeAdministracion->attributes = $_POST['GastoDeAdministracion'];
			$modelGastoOperativo->attributes = $_POST['GastoOperativo'];
			$modelInversion->attributes=$_POST['Inversion'];
			
			$modelDonativo->institucion_aid = $usuarioActual->institucion->id;
			$modelDonativo->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelDonativo->estatus_did = 1;
			$modelDonativo->editable = 1;
			$modelDonativo->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelIngresoPorCuotasDeRecuperacion->institucion_aid = $usuarioActual->institucion->id;
			$modelIngresoPorCuotasDeRecuperacion->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelIngresoPorCuotasDeRecuperacion->estatus_did = 1;
			$modelIngresoPorCuotasDeRecuperacion->editable = 1;
			$modelIngresoPorCuotasDeRecuperacion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelIngresoPorEvento->institucion_aid = $usuarioActual->institucion->id;
			$modelIngresoPorEvento->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelIngresoPorEvento->estatus_did = 1;
			$modelIngresoPorEvento->editable = 1;
			$modelIngresoPorEvento->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelGastoDeAdministracion->institucion_aid = $usuarioActual->institucion->id;
			$modelGastoDeAdministracion->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelGastoDeAdministracion->estatus_did = 1;
			$modelGastoDeAdministracion->editable = 1;
			$modelGastoDeAdministracion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelGastoOperativo->institucion_aid = $usuarioActual->institucion->id;
			$modelGastoOperativo->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelGastoOperativo->estatus_did = 1;
			$modelGastoOperativo->editable = 1;
			$modelGastoOperativo->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelInversion->institucion_aid = $usuarioActual->institucion->id;
			$modelInversion->ejercicio_did = $ejercicioFiscal->id;
			$modelInversion->estatus_did = 1;
			$modelInversion->editable = 1;
			$modelInversion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$valido = $modelDonativo->validate();
			$valido = $modelIngresoPorCuotasDeRecuperacion->validate();
			$valido = $modelIngresoPorEvento->validate();			
			
			if($valido)
			{
				if(
					$modelDonativo->save() && 
					$modelIngresoPorCuotasDeRecuperacion->save() && 
					$modelIngresoPorEvento->save() &&
					$modelGastoDeAdministracion->save() &&
					$modelGastoOperativo->save() &&
					$modelInversion->save()
				)
					$this->redirect(array('termino','que'=>'Ingreso','ac'=>'crear'));
			}			
		}

		$this->render('crearingreso',array(
			'modelDonativo'=>$modelDonativo,
			'modelIngresoPorCuotasDeRecuperacion'=>$modelIngresoPorCuotasDeRecuperacion,
			'modelIngresoPorEvento'=>$modelIngresoPorEvento,
			'modelGastoDeAdministracion'=>$modelGastoDeAdministracion,
			'modelGastoOperativo'=>$modelGastoOperativo,
			'modelInversion'=>$modelInversion,
		));
	}
	
	public function actionCrearegreso()
	{
		
	}
	
	public function actionCrearinversion()
	{
		$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
		$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
		
		$modelInversion=new Inversion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Inversion']))			
		{
			$modelInversion->attributes=$_POST['Inversion'];
			
			$modelInversion->institucion_aid = $usuarioActual->institucion->id;
			$modelInversion->ejercicio_did = $ejercicioFiscal->id;
			$modelInversion->estatus_did = 1;
			$modelInversion->editable = 1;
			$modelInversion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$valido = $modelInversion->validate();
			
			if($valido)
			{
				if(
					$modelInversion->save()
				)
					$this->redirect(array('termino','que'=>'Inversion','ac'=>'crear'));
			}			
		}

		$this->render('crearinversion',array(
			'modelInversion'=>$modelInversion,
		));
	}

	
	public function actionActualizaringreso()
	{
		$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
		$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
		
		$modelDonativo = IngresoPorDonativo::model()->find('institucion_aid=:donativo',
			array('donativo'=>$usuarioActual->institucion_aid));
					
		$modelIngresoPorCuotasDeRecuperacion=IngresoPorCuotasDeRecuperacion::model()->find('institucion_aid=:donativo',
			array('donativo'=>$usuarioActual->institucion_aid));
			
		$modelIngresoPorEvento = IngresoPorEvento::model()->find('institucion_aid=:donativo',
			array('donativo'=>$usuarioActual->institucion_aid));
			
		$modelGastoDeAdministracion = GastoDeAdministracion::model()->find('institucion_aid=:donativo',
			array('donativo'=>$usuarioActual->institucion_aid));
					
		$modelGastoOperativo=GastoOperativo::model()->find('institucion_aid=:donativo',
			array('donativo'=>$usuarioActual->institucion_aid));
		
		$modelInversion = Inversion::model()->find('institucion_aid=:donativo',
			array('donativo'=>$usuarioActual->institucion_aid));					
			
		if(isset($_POST['IngresoPorDonativo'],$_POST['IngresoPorCuotasdeRecuperacion'],$_POST['IngresoPorEvento'],$_POST['GastoDeAdministracion'],$_POST['GastoOperativo'], $_POST['Inversion']))			
		{
			$modelDonativo->attributes=$_POST['IngresoPorDonativo'];
			$modelIngresoPorCuotasDeRecuperacion->attributes=$_POST['IngresoPorCuotasdeRecuperacion'];
			$modelIngresoPorEvento->attributes = $_POST['IngresoPorEvento'];
			$modelGastoDeAdministracion->attributes = $_POST['GastoDeAdministracion'];
			$modelGastoOperativo->attributes = $_POST['GastoOperativo'];
			$modelInversion->attributes=$_POST['Inversion'];
			
			$modelDonativo->institucion_aid = $usuarioActual->institucion->id;
			$modelDonativo->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelDonativo->estatus_did = 1;
			$modelDonativo->editable = 1;
			$modelDonativo->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelIngresoPorCuotasDeRecuperacion->institucion_aid = $usuarioActual->institucion->id;
			$modelIngresoPorCuotasDeRecuperacion->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelIngresoPorCuotasDeRecuperacion->estatus_did = 1;
			$modelIngresoPorCuotasDeRecuperacion->editable = 1;
			$modelIngresoPorCuotasDeRecuperacion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelIngresoPorEvento->institucion_aid = $usuarioActual->institucion->id;
			$modelIngresoPorEvento->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelIngresoPorEvento->estatus_did = 1;
			$modelIngresoPorEvento->editable = 1;
			$modelIngresoPorEvento->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelGastoDeAdministracion->institucion_aid = $usuarioActual->institucion->id;
			$modelGastoDeAdministracion->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelGastoDeAdministracion->estatus_did = 1;
			$modelGastoDeAdministracion->editable = 1;
			$modelGastoDeAdministracion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelGastoOperativo->institucion_aid = $usuarioActual->institucion->id;
			$modelGastoOperativo->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelGastoOperativo->estatus_did = 1;
			$modelGastoOperativo->editable = 1;
			$modelGastoOperativo->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelInversion->institucion_aid = $usuarioActual->institucion->id;
			$modelInversion->ejercicio_did = $ejercicioFiscal->id;
			$modelInversion->estatus_did = 1;
			$modelInversion->editable = 1;
			$modelInversion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			if($modelDonativo->save() && 
				$modelIngresoPorCuotasDeRecuperacion->save() && 
				$modelIngresoPorEvento->save() &&
				$modelGastoDeAdministracion->save() &&
				$modelGastoOperativo->save() &&
				$modelInversion->save()
			)
				$this->redirect(array('termino','que'=>'Ingreso','ac'=>'actualizar'));
		}
		
		$this->render('crearingreso',array(
			'modelDonativo'=>$modelDonativo,
			'modelIngresoPorCuotasDeRecuperacion'=>$modelIngresoPorCuotasDeRecuperacion,
			'modelIngresoPorEvento'=>$modelIngresoPorEvento,
			'modelGastoDeAdministracion'=>$modelGastoDeAdministracion,
			'modelGastoOperativo'=>$modelGastoOperativo,
			'modelInversion'=>$modelInversion,
		));

	}
	
	public function actionActualizaregreso()
	{
		$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
		$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
		
		$modelGastoDeAdministracion = GastoDeAdministracion::model()->find('institucion_aid=:donativo',
			array('donativo'=>$usuarioActual->institucion_aid));
					
		$modelGastoOperativo=GastoOperativo::model()->find('institucion_aid=:donativo',
			array('donativo'=>$usuarioActual->institucion_aid));
			
		if(	isset($_POST['GastoDeAdministracion']) &&
			isset($_POST['GastoOperativo'])) 
		{
			$modelGastoDeAdministracion->attributes = $_POST['GastoDeAdministracion'];
			$modelGastoOperativo->attributes = $_POST['GastoOperativo'];
			
			$modelGastoDeAdministracion->institucion_aid = $usuarioActual->institucion->id;
			$modelGastoDeAdministracion->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelGastoDeAdministracion->estatus_did = 1;
			$modelGastoDeAdministracion->editable = 1;
			$modelGastoDeAdministracion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelGastoOperativo->institucion_aid = $usuarioActual->institucion->id;
			$modelGastoOperativo->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelGastoOperativo->estatus_did = 1;
			$modelGastoOperativo->editable = 1;
			$modelGastoOperativo->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			if(	$modelGastoDeAdministracion->save() &&
				$modelGastoOperativo->save()
			)
				$this->redirect(array('termino','que'=>'Egreso','ac'=>'crear'));
		}

		$this->render('crearegreso',array(
			'modelGastoDeAdministracion'=>$modelGastoDeAdministracion,
			'modelGastoOperativo'=>$modelGastoOperativo,
		));

	}
	
	public function actionActualizarinversion()
	{
		$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
		$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
		
		$modelInversion = Inversion::model()->find('institucion_aid=:donativo',
			array('donativo'=>$usuarioActual->institucion_aid));					
					
		if(isset($_POST['Inversion']))			
		{
			$modelInversion->attributes=$_POST['Inversion'];
			
			$modelInversion->institucion_aid = $usuarioActual->institucion->id;
			$modelInversion->ejercicio_did = $ejercicioFiscal->id;
			$modelInversion->estatus_did = 1;
			$modelInversion->editable = 1;
									
			if($modelInversion->save()
			)
				$this->redirect(array('termino','que'=>'Inversión','ac'=>'actualizar'));
		}
		
		$this->render('actualizarinversion',array(
			'modelInversion'=>$modelInversion,			
		));

	}


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Institucion']))
		{
			$model->attributes=$_POST['Institucion'];
			$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
			$model->usuario_did = $usuarioActual->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->deleteCascade();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Institucion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Institucion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Institucion']))
			$model->attributes=$_GET['Institucion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Institucion::model()->findByPk((int)$id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='institucion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	
	public function actionAutocompletesearch()
	{
	    $q = "%". $_GET['term'] ."%";
	 	$result = array();
	    if (!empty($q))
	    {
			$criteria=new CDbCriteria;
			$criteria->select=array('id', "CONCAT_WS(' ',nombre) as nombre");
			$criteria->condition="lower(CONCAT_WS(' ',nombre)) like lower(:nombre) ";
			$criteria->params=array(':nombre'=>$q);
			$criteria->limit='10';
	       	$cursor = Institucion::model()->findAll($criteria);
			foreach ($cursor as $valor)	
				$result[]=Array('label' => $valor->nombre,  
				                'value' => $valor->nombre,
				                'id' => $valor->id, );
	    }
	    echo json_encode($result);
	    Yii::app()->end();
	}
	
	
	public function actionDynamicList()
	{
		echo CHtml::tag('option',array(),CHtml::encode('Seleccione un Institución'),true);
		if(Yii::app()->request->isAjaxRequest  )
		{
			$criteria=new CDbCriteria;
			
			$model = new Institucion;
			$relations =$model->relations();
			
			$bandera =false;
			
			foreach($relations as $nombre=>$relacion)
			{
				if( $relacion[0]==Institucion::BELONGS_TO && isset($_POST[$relacion[2]]) && !empty($_POST[$relacion[2]]) )
				{
					$criteria->compare($relacion[2],$_POST[$relacion[2]]);
					$bandera = true;
				}
			}
			$criteria->order='nombre';
			
			if($bandera)
				$data=CHtml::listData(Institucion::model()->findAll($criteria), 'id', 'nombre');
			else
				$data=array();
			foreach($data as $value=>$name)
			{
				echo CHtml::tag('option',
				array('value'=>$value),CHtml::encode($name),true);
			}
			
		}
	}
	
	public function actionAcciones()
	{
		$this->render('acciones',array());
	}
	
	public function actionTermino()
	{
		$this->render('termino',array());
	}
	
	public function actionReportes()
	{
		$this->render('reportes',array());
	}
	
	public function actionReportepresupuesto()
	{
		$this->layout="//layouts/pdf";
		$this->render('reportepresupuesto',array());
	}
	
	public function actionActualizadeducibles()
    {    	
    	        
        if($_POST['donativoDeducible'] == 1)
        {
	        echo CHtml::tag('option',array('value' => '1'),'Nacional',true);
	        echo CHtml::tag('option',array('value' => '2'),'Nacional/Extranjera',true);
	    }
	    else
	    	echo CHtml::tag('option',array('value' => '0'),'Ninguna',true);
        
    }
}
