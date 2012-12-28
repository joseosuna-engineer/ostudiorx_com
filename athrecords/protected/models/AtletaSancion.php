<?php

/**
 * This is the model class for table "tbl_atleta_sancion".
 *
 * The followings are the available columns in table 'tbl_atleta_sancion':
 * @property integer $id
 * @property integer $cedula_atleta
 * @property string $motivo_sancion
 * @property string $organismo_sancion
 * @property integer $year_inicio_sancion
 * @property integer $year_fin_sancion
 *
 * The followings are the available model relations:
 * @property AtletaPersonal $cedulaAtleta
 */
class AtletaSancion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AtletaSancion the static model class
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
		return 'tbl_atleta_sancion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('cedula_atleta', 'required'),
			array('cedula_atleta, year_inicio_sancion, year_fin_sancion', 'numerical', 'integerOnly'=>true),
			array('motivo_sancion, organismo_sancion', 'length', 'max'=>45),
			array('year_inicio_sancion, year_fin_sancion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cedula_atleta, motivo_sancion, organismo_sancion, year_inicio_sancion, year_fin_sancion', 'safe', 'on'=>'search'),
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
			'cedulaAtleta' => array(self::BELONGS_TO, 'AtletaPersonal', 'cedula_atleta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			
			'motivo_sancion' => 'Motivo de la sancion',
			'organismo_sancion' => 'Organismo sancionante',
			'year_inicio_sancion' => 'Año de inicio',
			'year_fin_sancion' => 'Año de fin',
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

		$criteria->compare('cedula_atleta',$this->cedula_atleta);
		$criteria->compare('motivo_sancion',$this->motivo_sancion,true);
		$criteria->compare('organismo_sancion',$this->organismo_sancion,true);
		$criteria->compare('year_inicio_sancion',$this->year_inicio_sancion);
		$criteria->compare('year_fin_sancion',$this->year_fin_sancion);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}