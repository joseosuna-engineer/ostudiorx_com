<?php

/**
 * This is the model class for table "tbl_estado_civil_atleta".
 *
 * The followings are the available columns in table 'tbl_estado_civil_atleta':
 * @property integer $id_civil
 * @property string $civil
 */
class EstadoCivilAtleta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return EstadoCivilAtleta the static model class
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
		return 'tbl_estado_civil_atleta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_civil, civil', 'required'),
			array('id_civil', 'numerical', 'integerOnly'=>true),
			array('civil', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_civil, civil', 'safe', 'on'=>'search'),
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
			'id_civil' => 'Id Civil',
			'civil' => 'Civil',
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

		$criteria->compare('id_civil',$this->id_civil);
		$criteria->compare('civil',$this->civil,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}