-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';



-- -----------------------------------------------------
-- Table `bd_registro`.`tbl_atleta_personal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_registro`.`tbl_atleta_personal` (
  `cedula_atleta` INT(11) NOT NULL,
  `fecha_ultima_actualizacion_registro` DATETIME NOT NULL,
  `primer_nombre_atleta` VARCHAR(45) NOT NULL,
  `segundo_nombre_atleta` VARCHAR(45) NULL,
  `primer_apellido_atleta` VARCHAR(45) NOT NULL,
  `segundo_apellido_atleta` VARCHAR(45) NULL,
  `sexo_atleta` VARCHAR(45) NULL,
  `fecha_nacimiento_atleta` DATE NULL,
  `pais_nacimiento_atleta` VARCHAR(45) NULL,
  `estado_nacimiento_atleta` VARCHAR(45) NULL,
  `estado_civil_atleta` VARCHAR(45) NULL,
  `nacionalidad_atleta` VARCHAR(45) NULL,
  `direccion_estado_atleta` VARCHAR(45) NULL,
  `direccion_municipio_atleta` VARCHAR(45) NULL,
  `direccion_calle_atleta` VARCHAR(45) NULL,
  `direccion_tipo_calle_atleta` VARCHAR(45) NULL,
  `telefono_habitacion_atleta` VARCHAR(45) NULL,
  `telefono_celular_atleta` VARCHAR(45) NULL,
  `correo_electronico_atleta` VARCHAR(45) NULL,
  `talla_camisa_atleta` VARCHAR(45) NULL,
  `talla_franela_atleta` VARCHAR(45) NULL,
  `talla_pantalon_atleta` VARCHAR(45) NULL,
  `talla_short_atleta` VARCHAR(45) NULL,
  `talla_mono_atleta` VARCHAR(45) NULL,
  `talla_karategui_atleta` VARCHAR(45) NULL,
  `talla_dobok_atleta` VARCHAR(45) NULL,
  `talla_judogui_atleta` VARCHAR(45) NULL,
  `talla_traje_natacion_atleta` VARCHAR(45) NULL,
  `talla_calzado_atleta` VARCHAR(45) NULL,
  `talla_trusa_atleta` VARCHAR(45) NULL,
  `peso_atleta` VARCHAR(45) NULL,
  `estatura_atleta` VARCHAR(45) NULL,
  `alergias_atleta` VARCHAR(200) NULL,
  `evaluacion_medica_atleta` VARCHAR(45) NULL,
  `pertenece_ucv_atleta` VARCHAR(45) NULL,
  `sector_atleta` VARCHAR(45) NOT NULL,
  `facultad_atleta` VARCHAR(45) NULL,
  `escuela_atleta` VARCHAR(45) NOT NULL,
  `institucion_trabajo_atleta` VARCHAR(45) NULL,
  `departamento_trabajo_atleta` VARCHAR(45) NULL,
  PRIMARY KEY (`cedula_atleta`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_registro`.`tbl_atleta_academico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_registro`.`tbl_atleta_academico` (
  `cedula_atleta` INT(11) NOT NULL,
  `year_ingreso_educacion_superior_atleta` VARCHAR(45) NOT NULL,
  `escuela_estudia_atleta` VARCHAR(45) NULL,
  `semestre_year_cursa_atleta` VARCHAR(45) NULL,
  `estatus_actual_atleta` VARCHAR(45) NULL,
  `year_ingreso_ucv_atleta` VARCHAR(45) NULL,
  `tipo_ingreso_ucv_atleta` VARCHAR(45) NULL,
  `cambio_escuela_atleta` VARCHAR(45) NULL,
  `facultad_anterior_atleta` VARCHAR(45) NULL,
  `escuela_anterior_atleta` VARCHAR(45) NULL,
  `year_ingreso_anterior_atleta` VARCHAR(45) NULL,
  `tipo_ingreso_anterior_atleta` VARCHAR(45) NULL,
  `semestre_year_anterior_aprobado_atleta` VARCHAR(45) NULL,
  `es_becado_atleta` VARCHAR(45) NULL,
  `institucion_beca_atleta` VARCHAR(45) NULL,
  `estudios_superiores_anteriores_atleta` VARCHAR(45) NULL,
  `institucion_superior_anterior_atleta` VARCHAR(45) NULL,
  `materia_deporte_atleta` VARCHAR(45) NULL,
  `deportes1_periodo_atleta` VARCHAR(45) NULL,
  `deportes1_nota_atleta` VARCHAR(45) NULL,
  `deportes1_actividades_atleta` VARCHAR(200) NULL,
  `deportes2_periodo_atleta` VARCHAR(45) NULL,
  `deportes2_nota_atleta` VARCHAR(45) NULL,
  `deportes2_actividades_atleta` VARCHAR(200) NULL,
  PRIMARY KEY (`cedula_atleta`),
  INDEX `academico_personal_idx` (`cedula_atleta` ASC) VISIBLE,
  CONSTRAINT `academico_personal`
    FOREIGN KEY (`cedula_atleta`)
    REFERENCES `bd_registro`.`tbl_atleta_personal` (`cedula_atleta`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_registro`.`tbl_atleta_competencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_registro`.`tbl_atleta_competencia` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `cedula_atleta` INT(11) NOT NULL,
  `disciplina_competencia` VARCHAR(45) NULL,
  `nombre_competencia` VARCHAR(45) NULL,
  `sede_competencia` VARCHAR(45) NULL,
  `year_competencia` INT(11) NULL,
  `tipo_competencia` VARCHAR(45) NULL,
  `entidad_competencia` VARCHAR(45) NULL,
  `club_competencia` VARCHAR(45) NULL,
  `especialidad_competencia` VARCHAR(45) NULL,
  `categoria_competencia` VARCHAR(45) NULL,
  `lugar_competencia` VARCHAR(45) NULL,
  `nivel_competencia` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `competencia_personal_idx` (`cedula_atleta` ASC) VISIBLE,
  CONSTRAINT `competencia_personal`
    FOREIGN KEY (`cedula_atleta`)
    REFERENCES `bd_registro`.`tbl_atleta_personal` (`cedula_atleta`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_registro`.`tbl_atleta_deportivo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_registro`.`tbl_atleta_deportivo` (
  `cedula_atleta` INT(11) NOT NULL,
  `es_atleta_activo` VARCHAR(45) NOT NULL,
  `disciplina_atleta` VARCHAR(45) NOT NULL,
  `year_inscripcion_disciplina_atleta` VARCHAR(45) NULL,
  `dependencia_disciplina_atleta` VARCHAR(45) NULL,
  `estatus_disciplina_atleta` VARCHAR(45) NULL,
  `componente_disciplina_atleta` VARCHAR(45) NULL,
  `es_seleccion_nacional_atleta` VARCHAR(45) NULL,
  `es_seleccion_estadal_atleta` VARCHAR(45) NULL,
  `dia_practica_atleta` VARCHAR(45) NULL,
  `horario_practica_atleta` VARCHAR(45) NULL,
  PRIMARY KEY (`cedula_atleta`),
  INDEX `deportivo_personal_idx` (`cedula_atleta` ASC) VISIBLE,
  CONSTRAINT `deportivo_personal`
    FOREIGN KEY (`cedula_atleta`)
    REFERENCES `bd_registro`.`tbl_atleta_personal` (`cedula_atleta`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_registro`.`tbl_atleta_exhibicion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_registro`.`tbl_atleta_exhibicion` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `cedula_atleta` INT(11) NOT NULL,
  `nombre_exhibicion` VARCHAR(45) NULL,
  `nombre_sede_exhibicion` VARCHAR(45) NULL,
  `year_exhibicion` INT(11) NULL,
  `facilitador_exhibicion` VARCHAR(45) NULL,
  INDEX `exhibicion_personal_idx` (`cedula_atleta` ASC) VISIBLE,
  PRIMARY KEY (`id`),
  CONSTRAINT `exhibicion_personal`
    FOREIGN KEY (`cedula_atleta`)
    REFERENCES `bd_registro`.`tbl_atleta_personal` (`cedula_atleta`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_registro`.`tbl_atleta_reconocimiento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_registro`.`tbl_atleta_reconocimiento` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `cedula_atleta` INT(11) NOT NULL,
  `nombre_reconocimiento` VARCHAR(45) NULL,
  `institucion_reconocimiento` VARCHAR(45) NULL,
  `year_reconocimiento` INT(11) NULL,
  `categoria_reconocimiento` VARCHAR(45) NULL,
  `evento_reconocimiento` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `reconocimiento_personal_idx` (`cedula_atleta` ASC) VISIBLE,
  CONSTRAINT `reconocimiento_personal`
    FOREIGN KEY (`cedula_atleta`)
    REFERENCES `bd_registro`.`tbl_atleta_personal` (`cedula_atleta`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_registro`.`tbl_atleta_sancion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_registro`.`tbl_atleta_sancion` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `cedula_atleta` INT(11) NOT NULL,
  `motivo_sancion` VARCHAR(45) NULL,
  `organismo_sancion` VARCHAR(45) NULL,
  `year_inicio_sancion` INT(11) NULL,
  `year_fin_sancion` INT(11) NULL,
  PRIMARY KEY (`id`),
  INDEX `sancion_personal_idx` (`cedula_atleta` ASC) VISIBLE,
  CONSTRAINT `sancion_personal`
    FOREIGN KEY (`cedula_atleta`)
    REFERENCES `bd_registro`.`tbl_atleta_personal` (`cedula_atleta`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;






-- -----------------------------------------------------
-- Table `bd_registro`.`tbl_foto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_registro`.`tbl_foto` (
  `cedula_atleta` INT(11) NOT NULL,
  `foto_atleta` LONGBLOB NULL,
  PRIMARY KEY (`cedula_atleta`),
  INDEX `fk_foto_personal_idx` (`cedula_atleta` ASC) VISIBLE,
  CONSTRAINT `fk_foto_personal`
    FOREIGN KEY (`cedula_atleta`)
    REFERENCES `bd_registro`.`tbl_atleta_personal` (`cedula_atleta`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_registro`.`tbl_fotocopia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_registro`.`tbl_fotocopia` (
  `cedula_atleta` INT(11) NOT NULL,
  `fotocopia_atleta` LONGBLOB NULL,
  PRIMARY KEY (`cedula_atleta`),
  INDEX `fk_fotocopia_personal_idx` (`cedula_atleta` ASC) VISIBLE,
  CONSTRAINT `fk_fotocopia_personal`
    FOREIGN KEY (`cedula_atleta`)
    REFERENCES `bd_registro`.`tbl_atleta_personal` (`cedula_atleta`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Table `bd_registro`.`tbl_dependencia_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_registro`.`tbl_dependencia_usuario` (
  `id` VARCHAR(45) NOT NULL,
  `dependencia` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_registro`.`tbl_nivel_competencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_registro`.`tbl_nivel_competencia` (
  `id_nivel` INT(11) NOT NULL,
  `nivel` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_nivel`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_registro`.`tbl_tipo_competencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_registro`.`tbl_tipo_competencia` (
  `id_tipo` INT(11) NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tipo`))
ENGINE = InnoDB;






SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
