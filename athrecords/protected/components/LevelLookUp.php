<?php
class LevelLookUp{
      const OPERADOR = 'Operador';
      const ADMIN  = 'Administrador';
      // For CGridView, CListView Purposes
      public static function getLabel( $level ){
          if($level == self::OPERADOR)
             return 'Operador';
          if($level == self::ADMIN)
             return 'Administrador';
          return false;
      }
      // for dropdown lists purposes
      public static function getLevelList(){
          return array(
                 self::OPERADOR=>'Operador',
                 self::ADMIN=>'Administrador');
    }
}
?>