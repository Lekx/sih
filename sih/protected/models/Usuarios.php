<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property integer $id_rol
 * @property string $usuario
 * @property string $contrasena
 * @property string $fecha_registro
 * @property string $fecha_expiracion
 * @property integer $estatus
 *
 * The followings are the available model relations:
 * @property Incidentes[] $incidentes
 * @property IncidentesSeguim[] $incidentesSeguims
 * @property Roles $idRol
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rol', 'required'),
			array('id_rol, estatus', 'numerical', 'integerOnly'=>true),
			array('usuario', 'length', 'max'=>100),
			array('contrasena', 'length', 'max'=>250),
			array('fecha_registro, fecha_expiracion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_rol, usuario, contrasena, fecha_registro, fecha_expiracion, estatus', 'safe', 'on'=>'search'),
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
			'incidentes' => array(self::HAS_MANY, 'Incidentes', 'de_id_usuario'),
			'incidentesSeguims' => array(self::HAS_MANY, 'IncidentesSeguim', 'id_usuario'),
			'idRol' => array(self::BELONGS_TO, 'Roles', 'id_rol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_rol' => 'Id Rol',
			'usuario' => 'Usuario',
			'contrasena' => 'Contrasena',
			'fecha_registro' => 'Fecha Registro',
			'fecha_expiracion' => 'Fecha Expiracion',
			'estatus' => 'Estatus',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_rol',$this->id_rol);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('contrasena',$this->contrasena,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('fecha_expiracion',$this->fecha_expiracion,true);
		$criteria->compare('estatus',$this->estatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
