<?php

/**
 * This is the model class for table "areas_puestos".
 *
 * The followings are the available columns in table 'areas_puestos':
 * @property integer $id
 * @property integer $id_area
 * @property integer $id_puesto
 * @property integer $estatus
 *
 * The followings are the available model relations:
 * @property Areas $idArea
 * @property Puestos $idPuesto
 * @property Puestos $puesto
 * @property Personas[] $personases
 */
class AreasPuestos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'areas_puestos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_area, id_puesto', 'required'),
			array('id_area, id_puesto, estatus', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_area, id_puesto, estatus', 'safe', 'on'=>'search'),
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
			'idArea' => array(self::BELONGS_TO, 'Areas', 'id_area'),
			'idPuesto' => array(self::BELONGS_TO, 'Puestos', 'id_puesto'),
			'personases' => array(self::HAS_MANY, 'Personas', 'id_area_puesto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_area' => 'Id Area',
			'id_puesto' => 'Id Puesto',
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
		$criteria->compare('id_area',$this->id_area);
		$criteria->compare('id_puesto',$this->id_puesto);
		$criteria->compare('estatus',$this->estatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AreasPuestos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
