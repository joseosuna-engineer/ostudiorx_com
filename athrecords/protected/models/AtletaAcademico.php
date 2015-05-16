<?php

/**
 * This is the model class for table "tbl_atleta_academico".
 *
 * The followings are the available columns in table 'tbl_atleta_academico':
 * @property integer $cedula_atleta
 * @property string $year_ingreso_educacion_superior_atleta
 * @property string $escuela_estudia_atleta
 * @property string $semestre_year_cursa_atleta
 * @property string $estatus_actual_atleta


 * @property string $year_ingreso_ucv_atleta
 * @property string $tipo_ingreso_ucv_atleta
 * @property string $cambio_escuela_atleta
 * @property string $facultad_anterior_atleta
 * @property string $escuela_anterior_atleta
 * @property string $year_ingreso_anterior_atleta
 * @property string $tipo_ingreso_anterior_atleta
 * @property string $semestre_year_anterior_aprobado_atleta
 * @property string $es_becado_atleta
 * @property string $institucion_beca_atleta
 * @property string $estudios_superiores_anteriores_atleta
 * @property string $institucion_superior_anterior_atleta
 * @property string $materia_deporte_atleta
 * @property string $deportes1_periodo_atleta
 * @property string $deportes1_nota_atleta
 * @property string $deportes1_actividades_atleta
 * @property string $deportes2_periodo_atleta
 * @property string $deportes2_nota_atleta
 * @property string $deportes2_actividades_atleta
 *
 * The followings are the available model relations:
 * @property AtletaPersonal $cedulaAtleta
 */
class AtletaAcademico extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AtletaAcademico the static model class
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
		return 'tbl_atleta_academico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
			array('year_ingreso_educacion_superior_atleta', 'required'),
			
			
			
			array('escuela_estudia_atleta, semestre_year_cursa_atleta, estatus_actual_atleta, year_ingreso_ucv_atleta, tipo_ingreso_ucv_atleta, cambio_escuela_atleta, facultad_anterior_atleta, escuela_anterior_atleta, year_ingreso_anterior_atleta, tipo_ingreso_anterior_atleta, semestre_year_anterior_aprobado_atleta, es_becado_atleta, institucion_beca_atleta, estudios_superiores_anteriores_atleta, institucion_superior_anterior_atleta, materia_deporte_atleta, deportes1_periodo_atleta, deportes1_nota_atleta, deportes2_periodo_atleta, deportes2_nota_atleta', 'length', 'max'=>45),
			array('deportes1_actividades_atleta, deportes2_actividades_atleta', 'length', 'max'=>200),
			array('year_ingreso_educacion_superior_atleta', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('year_ingreso_educacion_superior_atleta', 'safe', 'on'=>'search'),
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
			'year_ingreso_educacion_superior_atleta' => 'Año de ingreso a la educación superior',
			'escuela_estudia_atleta' => 'Escuela',
			'semestre_year_cursa_atleta' => 'Semestre o año que cursa',
			'estatus_actual_atleta' => 'Estatus actual',		
			
			'year_ingreso_ucv_atleta' => 'Año de ingreso a la U',
			'tipo_ingreso_ucv_atleta' => 'Tipo de ingreso',
			'cambio_escuela_atleta' => '¿Ha realizado cambio de escuela?',
			'facultad_anterior_atleta' => 'Facultad anterior',
			'escuela_anterior_atleta' => 'Escuela anterior',
			'year_ingreso_anterior_atleta' => 'Año de ingreso en dicha carrera',
			'tipo_ingreso_anterior_atleta' => 'Tipo de ingreso en dicha carrera',
			'semestre_year_anterior_aprobado_atleta' => 'Semestre o año aprobado en dicha carrera',
			'es_becado_atleta' => '¿Es beneficiario de beca o pasantía?',
			'institucion_beca_atleta' => 'Institución que otorga la beca',
			'estudios_superiores_anteriores_atleta' => '¿Ha cursado estudios de educación superior en otra Institución?',
			'institucion_superior_anterior_atleta' => 'Nombre de la institución',
			'materia_deporte_atleta' => '¿Ha cursado o cursa la materia Deportes?',
			'deportes1_periodo_atleta' => 'Período lectivo en que cursó Deportes I',
			'deportes1_nota_atleta' => 'Nota obtenida en Deportes I',
			'deportes1_actividades_atleta' => 'Actividades realizadas en Deportes I',
			'deportes2_periodo_atleta' => 'Período lectivo en que cursó Deportes II',
			'deportes2_nota_atleta' => 'Nota obtenida en Deportes II',
			'deportes2_actividades_atleta' => 'Actividades realizadas en Deportes II',
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

		
		$criteria->compare('year_ingreso_educacion_superior_atleta',$this->year_ingreso_educacion_superior_atleta);
		

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
	protected function beforeSave(){
	
		
		
		
		$this->setAttribute('deportes1_actividades_atleta', strtolower($this->deportes1_actividades_atleta));
		
		$this->setAttribute('deportes2_actividades_atleta', strtolower($this->deportes2_actividades_atleta));
		
		
	
		return parent::beforeSave();
		
	}
		
}