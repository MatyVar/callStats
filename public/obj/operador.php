<?php
class operador {
    public $nombre='name';
    public $supervisor='name';
    public $categoria='cat';
    public $tiempoTrabajado='00:00:00';
    public $cantEntrantesAtendidas=0;
    public $cantSalientesAtendidas=0;
    public $atendidasTotales=0;
    public $acwCantidad=0;
    public $acwTiempo='00:00:00';
    public $acwPorLlamada='00:00:00';
    public $talkTimeTotal='00:00:00';
    public $talkTimePorLlamada='00:00:00';
    public $talkTimeSaliente = '00:00:00';
    public $talkTimeEntrante = '00:00:00';
    public $holdTimeTotal='00:00:00';
    public $holdTimePorLlamada='00:00:00';
    public $almuerzoTiempo='00:00:00';
    public $almuerzoCantidad=0;
    public $inicioDeSesionTiempo='00:00:00';
    public $inicioDeSesionCantidad=0;
    public $finDeSesionTiempo='00:00:00';
    public $finDeSesionCantidad=0;
    public $backofficeTiempo='00:00:00';
    public $backofficeCantidad=0;
    public $reunionTiempo='00:00:00';
    public $reunionCantidad=0;
    public $tmo='00:00:00';
    public $tmoPorLlamada='00:00:00';
    public $avail='00:00:00';
    public $availInPercent='0%';
    public $occupancy='00:00:00';
    public $torre='00:00:00';

    
function __construct($name){
    $this->nombre=$name;
}

}
