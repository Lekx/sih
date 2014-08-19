<?php

/**
 * This is the model class for table "nomina".
 *
 * The followings are the available columns in table 'nomina':
 * @property integer $id
 * @property integer $id_persona
 * @property double $sueldo_base
 * @property integer $horas_extra
 * @property integer $dias_trabajados
 * @property integer $imss
 * @property integer $isr
 * @property string $periodo_pago_inicio
 * @property string $periodo_pago_fin
 * @property integer $estatus
 *
 * The followings are the available model relations:
 * @property Personas $idPersona
 */
class Nomina extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nomina';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_persona, sueldo_base', 'required'),
			array('id_persona, horas_extra, dias_trabajados, imss, isr, estatus', 'numerical', 'integerOnly'=>true),
			array('sueldo_base', 'numerical'),
			array('periodo_pago_inicio, periodo_pago_fin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_persona, sueldo_base, horas_extra, dias_trabajados, imss, isr, periodo_pago_inicio, periodo_pago_fin, estatus', 'safe', 'on'=>'search'),
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
			'idPersona' => array(self::BELONGS_TO, 'Personas', 'id_persona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_persona' => 'Id Persona',
			'sueldo_base' => 'Sueldo Base',
			'horas_extra' => 'Horas Extra',
			'dias_trabajados' => 'Dias Trabajados',
			'imss' => 'Imss',
			'isr' => 'Isr',
			'periodo_pago_inicio' => 'Periodo Pago Inicio',
			'periodo_pago_fin' => 'Periodo Pago Fin',
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
		$criteria->compare('id_persona',$this->id_persona);
		$criteria->compare('sueldo_base',$this->sueldo_base);
		$criteria->compare('horas_extra',$this->horas_extra);
		$criteria->compare('dias_trabajados',$this->dias_trabajados);
		$criteria->compare('imss',$this->imss);
		$criteria->compare('isr',$this->isr);
		$criteria->compare('periodo_pago_inicio',$this->periodo_pago_inicio,true);
		$criteria->compare('periodo_pago_fin',$this->periodo_pago_fin,true);
		$criteria->compare('estatus',$this->estatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Nomina the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
