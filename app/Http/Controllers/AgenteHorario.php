<?php
 class AgenteHorario
 {
     public $nombre = '';
     public $entrada = '00:00:00';
     public $salida = '00:00:00';



     function __construct($name)
     {
         $this->nombre = $name;
     }
 }
