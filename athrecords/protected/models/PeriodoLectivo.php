<?php

/**
 * This is the model class for table "tbl_periodo_lectivo".
 *
 * The followings are the available columns in table 'tbl_periodo_lectivo':
 * @property integer $id_lectivo
 * @property string $lectivo
 */
class PeriodoLectivo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return PeriodoLectivo the static model class
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
		return 'tbl_periodo_lectivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_lectivo, lectivo', 'required'),
			array('id_lectivo', 'numerical', 'integerOnly'=>true),
			array('lectivo', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_lectivo, lectivo', 'safe', 'on'=>'search'),
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
			'id_lectivo' => 'Id Lectivo',
			'lectivo' => 'Lectivo',
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

		$criteria->compare('id_lectivo',$this->id_lectivo);
		$criteria->compare('lectivo',$this->lectivo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}