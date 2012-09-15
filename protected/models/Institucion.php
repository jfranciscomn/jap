<?php

/**
 * This is the model class for table "Institucion".
 *
 * The followings are the available columns in table 'Institucion':
 * @property integer $id
 * @property string $nombre
 * @property string $siglas
 * @property string $mision
 * @property string $vision
 * @property string $domicioDireccion
 * @property string $domicilioCP
 * @property integer $domicilioMunicipio_aid
 * @property string $contactoTelefono
 * @property string $contactoFax
 * @property string $contactoEmail
 * @property string $fechaConstitucion_dt
 * @property string $fechaTransformacion_dt
 * @property string $rfc
 * @property integer $donativoDeducible
 * @property integer $donativoConvenio
 * @property string $cluni
 * @property integer $ambito_did
 * @property integer $areageografica_did
 * @property integer $horasPromedio_trabajador
 * @property integer $estatus_did
 *
 * The followings are the available model relations:
 * @property GastoDeAdministracion[] $gastoDeAdministracions
 * @property GastoOperativo[] $gastoOperativos
 * @property IngresoPorCuotasdeRecuperacion[] $ingresoPorCuotasdeRecuperacions
 * @property IngresoPorDonativo[] $ingresoPorDonativos
 * @property IngresoPorEvento[] $ingresoPorEventos
 * @property IngresoPorVenta[] $ingresoPorVentas
 * @property Municipio $domicilioMunicipio
 * @property Ambito $ambito
 * @property AreaGeografica $areageografica
 * @property Estatus $estatus
 * @property Usuario[] $usuarios
 */
class Institucion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Institucion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Institucion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		array('nombre, siglas, domicioDireccion, domicilioCP, domicilioMunicipio_aid, fechaConstitucion_dt, rfc, donativoDeducible, donativoConvenio, ambito_did, areageografica_did, estatus_did', 'required'),
array('domicilioMunicipio_aid, donativoDeducible, donativoConvenio, ambito_did, areageografica_did, horasPromedio_trabajador, estatus_did', 'numerical', 'integerOnly'=>true),
array('nombre, domicioDireccion, contactoEmail', 'length', 'max'=>145),
array('siglas, domicilioCP, contactoTelefono, contactoFax, cluni', 'length', 'max'=>45),
array('rfc', 'length', 'max'=>13),
array('mision, vision, fechaTransformacion_dt', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, siglas, mision, vision, domicioDireccion, domicilioCP, domicilioMunicipio_aid, contactoTelefono, contactoFax, contactoEmail, fechaConstitucion_dt, fechaTransformacion_dt, rfc, donativoDeducible, donativoConvenio, cluni, ambito_did, areageografica_did, horasPromedio_trabajador, estatus_did', 'safe', 'on'=>'search'),
		);
	}
	
	
	public function extendedRules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		array('ambito_did, areageografica_did, estatus_did','dropdownfield'),
array('domicilioMunicipio_aid','autocompletefield'),
			
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'gastoDeAdministracions' => array(self::HAS_MANY, 'GastoDeAdministracion', 'institucion_aid'),
			'gastoOperativos' => array(self::HAS_MANY, 'GastoOperativo', 'institucion_aid'),
			'ingresoPorCuotasdeRecuperacions' => array(self::HAS_MANY, 'IngresoPorCuotasdeRecuperacion', 'institucion_aid'),
			'ingresoPorDonativos' => array(self::HAS_MANY, 'IngresoPorDonativo', 'institucion_aid'),
			'ingresoPorEventos' => array(self::HAS_MANY, 'IngresoPorEvento', 'institucion_aid'),
			'ingresoPorVentas' => array(self::HAS_MANY, 'IngresoPorVenta', 'institucion_aid'),
			'domicilioMunicipio' => array(self::BELONGS_TO, 'Municipio', 'domicilioMunicipio_aid'),
			'ambito' => array(self::BELONGS_TO, 'Ambito', 'ambito_did'),
			'areageografica' => array(self::BELONGS_TO, 'AreaGeografica', 'areageografica_did'),
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_did'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'institucion_aid'),
		);
	}
	
	
	/**
	*
	*/
	public function attributeIsDirectRelation($attr)
	{
		$relations =$this->relations();
		foreach($relations as $nombre=>$relacion)
			if($relacion[2]===$attr && $relacion[0]==self::BELONGS_TO)
				return true;
		
		return false;
	
	}
	
	/**
	*
	**/
	public function attributeDatatypeRelation($attr)
	{
		$relations =$this->relations();
		foreach($relations as $nombre=>$relacion)
			if($relacion[2]===$attr)
				return $relacion[1];
		
		return null;
	}
	
	
	/**
	* elimina en cascada
	**/
	public function deleteCascade()
	{
		foreach ($this->$gastoDeAdministracions as $gastoDeAdministracionsn )
			$gastoDeAdministracionsn->deleteCascade();

		foreach ($this->$gastoOperativos as $gastoOperativosn )
			$gastoOperativosn->deleteCascade();

		foreach ($this->$ingresoPorCuotasdeRecuperacions as $ingresoPorCuotasdeRecuperacionsn )
			$ingresoPorCuotasdeRecuperacionsn->deleteCascade();

		foreach ($this->$ingresoPorDonativos as $ingresoPorDonativosn )
			$ingresoPorDonativosn->deleteCascade();

		foreach ($this->$ingresoPorEventos as $ingresoPorEventosn )
			$ingresoPorEventosn->deleteCascade();

		foreach ($this->$ingresoPorVentas as $ingresoPorVentasn )
			$ingresoPorVentasn->deleteCascade();

		foreach ($this->$usuarios as $usuariosn )
			$usuariosn->deleteCascade();

		$this->delete();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'siglas' => 'Siglas',
			'mision' => 'Mision',
			'vision' => 'Vision',
			'domicioDireccion' => 'Domicio Direccion',
			'domicilioCP' => 'Domicilio Cp',
			'domicilioMunicipio_aid' => 'Domicilio Municipio',
			'contactoTelefono' => 'Contacto Telefono',
			'contactoFax' => 'Contacto Fax',
			'contactoEmail' => 'Contacto Email',
			'fechaConstitucion_dt' => 'Fecha Constitucion Dt',
			'fechaTransformacion_dt' => 'Fecha Transformacion Dt',
			'rfc' => 'Rfc',
			'donativoDeducible' => 'Donativo Deducible',
			'donativoConvenio' => 'Donativo Convenio',
			'cluni' => 'Cluni',
			'ambito_did' => 'Ambito',
			'areageografica_did' => 'Areageografica',
			'horasPromedio_trabajador' => 'Horas Promedio Trabajador',
			'estatus_did' => 'Estatus',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('siglas',$this->siglas,true);
		$criteria->compare('mision',$this->mision,true);
		$criteria->compare('vision',$this->vision,true);
		$criteria->compare('domicioDireccion',$this->domicioDireccion,true);
		$criteria->compare('domicilioCP',$this->domicilioCP,true);
		$criteria->compare('domicilioMunicipio_aid',$this->domicilioMunicipio_aid);
		$criteria->compare('contactoTelefono',$this->contactoTelefono,true);
		$criteria->compare('contactoFax',$this->contactoFax,true);
		$criteria->compare('contactoEmail',$this->contactoEmail,true);
		$criteria->compare('fechaConstitucion_dt',$this->fechaConstitucion_dt,true);
		$criteria->compare('fechaTransformacion_dt',$this->fechaTransformacion_dt,true);
		$criteria->compare('rfc',$this->rfc,true);
		$criteria->compare('donativoDeducible',$this->donativoDeducible);
		$criteria->compare('donativoConvenio',$this->donativoConvenio);
		$criteria->compare('cluni',$this->cluni,true);
		$criteria->compare('ambito_did',$this->ambito_did);
		$criteria->compare('areageografica_did',$this->areageografica_did);
		$criteria->compare('horasPromedio_trabajador',$this->horasPromedio_trabajador);
		$criteria->compare('estatus_did',$this->estatus_did);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}