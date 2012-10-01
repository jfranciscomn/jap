<?php

/**
 * This is the model class for table "Inversion".
 *
 * The followings are the available columns in table 'Inversion':
 * @property string $id
 * @property double $terrenos
 * @property double $inmuebles
 * @property double $vehiculosServicio
 * @property double $vehiculosAdministrativos
 * @property double $otros
 * @property integer $institucion_aid
 * @property integer $estatus_did
 * @property integer $ejercicio_did
 * @property integer $editable
 * @property string $ultimaModificacion_dt
 *
 * The followings are the available model relations:
 * @property EjercicioFiscal $ejercicio
 * @property Estatus $estatus
 * @property Institucion $institucion
 */
class Inversion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Inversion the static model class
	 */
	 
	public static function classNameLabel()
	{
		return 'Inversion';
	}
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Inversion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institucion_aid, estatus_did, ejercicio_did, editable, ultimaModificacion_dt', 'required'),
			array('institucion_aid, estatus_did, ejercicio_did, editable', 'numerical', 'integerOnly'=>true),
			array('terrenos, inmuebles, equipoOficina, vehiculosServicio, vehiculosAdministrativos, otros', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, terrenos, inmuebles, equipoOficina, vehiculosServicio, vehiculosAdministrativos, otros, institucion_aid, estatus_did, ejercicio_did, editable, ultimaModificacion_dt', 'safe', 'on'=>'search'),
		);
	}
	
	
	public function extendedRules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estatus_did, ejercicio_did','dropdownfield'),
			array('institucion_aid','autocompletefield'),
			
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
			'ejercicio' => array(self::BELONGS_TO, 'EjercicioFiscal', 'ejercicio_did'),
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_did'),
			'institucion' => array(self::BELONGS_TO, 'Institucion', 'institucion_aid'),
		);
	}
	
	
	/**
	*
	*/
	public function setLinkedRelations(){
		/*return array('municipio_id'=>array(
				'model'=>'Estado',
				'attribute' =>'estado_id',
				'value'=> $this->municipio->estado->id,
			),);*/
			
		return array();
	}
	
	
	/**
	* elimina en cascada
	**/
	public function deleteCascade()
	{
		$this->delete();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'terrenos' => 'Terrenos',
			'inmuebles' => 'Inmuebles',
			'equipoOficina' => 'Equipo De Oficina',
			'vehiculosServicio' => 'Vehículos Servicio',
			'vehiculosAdministrativos' => 'Vehículos Administrativos',
			'otros' => 'Otros',
			'institucion_aid' => 'Institución',
			'estatus_did' => 'Estatus',
			'ejercicio_did' => 'Ejercicio',
			'editable' => 'Editable',
			'ultimaModificacion_dt' => 'Última Modificación',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('terrenos',$this->terrenos);
		$criteria->compare('inmuebles',$this->inmuebles);
		$criteria->compare('equipoOficina',$this->equipoOficina);
		$criteria->compare('vehiculosServicio',$this->vehiculosServicio);
		$criteria->compare('vehiculosAdministrativos',$this->vehiculosAdministrativos);
		$criteria->compare('otros',$this->otros);
		$criteria->compare('institucion_aid',$this->institucion_aid);
		$criteria->compare('estatus_did',$this->estatus_did);
		$criteria->compare('ejercicio_did',$this->ejercicio_did);
		$criteria->compare('editable',$this->editable);
		$criteria->compare('ultimaModificacion_dt',$this->ultimaModificacion_dt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
