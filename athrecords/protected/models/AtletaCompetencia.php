<?php

/**
 * This is the model class for table "tbl_atleta_competencia".
 *
 * The followings are the available columns in table 'tbl_atleta_competencia':
 * @property integer $id
 * @property integer $cedula_atleta
 * @property string $disciplina_competencia
 * @property string $nombre_competencia
 * @property string $sede_competencia
 * @property integer $year_competencia
 * @property string $tipo_competencia
 * @property string $entidad_competencia
 * @property string $club_competencia
 * @property string $especialidad_competencia
 * @property string $categoria_competencia
 * @property string $lugar_competencia
 * @property string $nivel_competencia
 *
 * The followings are the available model relations:
 * @property AtletaPersonal $cedulaAtleta
 */
class AtletaCompetencia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AtletaCompetencia the static model class
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
		return 'tbl_atleta_competencia';
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
			array('id, cedula_atleta, year_competencia', 'numerical', 'integerOnly'=>true),
			array('disciplina_competencia, nombre_competencia, sede_competencia, tipo_competencia, entidad_competencia, club_competencia, especialidad_competencia, categoria_competencia, lugar_competencia, nivel_competencia', 'length', 'max'=>45),
			array('year_competencia', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cedula_atleta, disciplina_competencia, nombre_competencia, sede_competencia, year_competencia, tipo_competencia, entidad_competencia, club_competencia, especialidad_competencia, categoria_competencia, lugar_competencia, nivel_competencia', 'safe', 'on'=>'search'),
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
			
		
			'nombre_competencia' => 'Nombre',
			'sede_competencia' => 'Sede',
			'year_competencia' => 'Año',
			'tipo_competencia' => 'Tipo',
			'entidad_competencia' => 'Entidad que repretó',
			'club_competencia' => 'Club que representó',
		
		
			'lugar_competencia' => 'Lugar obtenido',
			'nivel_competencia' => 'Nivel',
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
		$criteria->compare('disciplina_competencia',$this->disciplina_competencia,true);
		$criteria->compare('nombre_competencia',$this->nombre_competencia,true);
		$criteria->compare('sede_competencia',$this->sede_competencia,true);
		$criteria->compare('year_competencia',$this->year_competencia);
		$criteria->compare('tipo_competencia',$this->tipo_competencia,true);
		$criteria->compare('entidad_competencia',$this->entidad_competencia,true);
		$criteria->compare('club_competencia',$this->club_competencia,true);
		$criteria->compare('especialidad_competencia',$this->especialidad_competencia,true);
		$criteria->compare('categoria_competencia',$this->categoria_competencia,true);
		$criteria->compare('lugar_competencia',$this->lugar_competencia,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}