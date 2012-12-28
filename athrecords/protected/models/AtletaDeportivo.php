<?php

/**
 * This is the model class for table "tbl_atleta_deportivo".
 *
 * The followings are the available columns in table 'tbl_atleta_deportivo':
 * @property integer $cedula_atleta
 * @property string $es_atleta_activo
 * @property string $disciplina_atleta
 
 * @property string $year_inscripcion_disciplina_atleta
 * @property string $dependencia_disciplina_atleta
 * @property string $estatus_disciplina_atleta
 * @property string $componente_disciplina_atleta
 * @property string $es_seleccion_nacional_atleta
 * @property string $es_seleccion_estadal_atleta
 * @property string $dia_practica_atleta
 * @property string $horario_practica_atleta
 *
 * The followings are the available model relations:
 * @property AtletaPersonal $cedulaAtleta
 */
class AtletaDeportivo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AtletaDeportivo the static model class
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
		return 'tbl_atleta_deportivo';
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
			array('disciplina_atleta, es_atleta_activo', 'required'),
			array('cedula_atleta', 'numerical', 'integerOnly'=>true),
			array('disciplina_atleta, dependencia_disciplina_atleta, estatus_disciplina_atleta, componente_disciplina_atleta, es_seleccion_nacional_atleta, es_seleccion_estadal_atleta, dia_practica_atleta, horario_practica_atleta', 'length', 'max'=>45),
			array('year_inscripcion_disciplina_atleta', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('disciplina_atleta', 'safe', 'on'=>'search'),
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
			'cedula_atleta' => 'Cédula',
			'es_atleta_activo' => 'Estatus deportivo',
			'disciplina_atleta' => 'Disciplina deportiva',
			
			
			'year_inscripcion_disciplina_atleta' => 'Año de inscripción en la disciplina',
			'dependencia_disciplina_atleta' => 'Lugar donde practica la disciplina deportiva',
			'estatus_disciplina_atleta' => 'Estatus deportivo',
			'componente_disciplina_atleta' => 'Componente al cual pertenece',
			'es_seleccion_nacional_atleta' => '¿Pertenece a la selección nacional de la disciplina deportiva?',
			'es_seleccion_estadal_atleta' => '¿Pertenece a la selección distrital o estadal de la disciplina deportiva?',
			'dia_practica_atleta' => 'Días de práctica',
			'horario_practica_atleta' => 'Horario de práctica',
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

		
		$criteria->compare('disciplina_atleta',$this->disciplina_atleta,true);


		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}