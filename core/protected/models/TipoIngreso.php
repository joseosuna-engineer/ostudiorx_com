<?php

/**
 * This is the model class for table "tbl_tipo_ingreso".
 *
 * The followings are the available columns in table 'tbl_tipo_ingreso':
 * @property integer $id_ingreso
 * @property string $ingreso
 */
class TipoIngreso extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TipoIngreso the static model class
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
		return 'tbl_tipo_ingreso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ingreso, ingreso', 'required'),
			array('id_ingreso', 'numerical', 'integerOnly'=>true),
			array('ingreso', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_ingreso, ingreso', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ingreso' => 'Id Ingreso',
			'ingreso' => 'Ingreso',
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

		$criteria->compare('id_ingreso',$this->id_ingreso);
		$criteria->compare('ingreso',$this->ingreso,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}