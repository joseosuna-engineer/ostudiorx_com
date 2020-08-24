<?php

/**
 * This is the model class for table "tbl_talla_asiatica".
 *
 * The followings are the available columns in table 'tbl_talla_asiatica':
 * @property integer $id_asiatica
 * @property string $asiatica
 */
class TallaAsiatica extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TallaAsiatica the static model class
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
		return 'tbl_talla_asiatica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_asiatica, asiatica', 'required'),
			array('id_asiatica', 'numerical', 'integerOnly'=>true),
			array('asiatica', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_asiatica, asiatica', 'safe', 'on'=>'search'),
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
			'id_asiatica' => 'Id Asiatica',
			'asiatica' => 'Asiatica',
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

		$criteria->compare('id_asiatica',$this->id_asiatica);
		$criteria->compare('asiatica',$this->asiatica,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}