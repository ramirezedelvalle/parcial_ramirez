<?php
require 'Conexion.php';

class insumos extends Conexion{
    public $insu_cod;
    public $insu_nom;
    public $insu_marca;
    public $insu_prov;
    public $insu_cant;
    public $insu_prec;



    public function __construct($args = [] )
    {
        $this->insu_cod = $args['insu_cod'] ?? '';
        $this->insu_nom = $args['insu_nom'] ?? '';
        $this->insu_marca = $args['insu_marca'] ?? '';
        $this->insu_prov = $args['insu_prov'] ?? '';
        $this->insu_cant = $args['insu_cant'] ?? '';
        $this->insu_prec = $args['insu_prec'] ?? '';
        
    }

    public function guardar(){
        $sql = "INSERT INTO insumos(insu_cod, insu_nom, insu_marca, insu_prov, insu_cant, insu_prec) 
        values('$this->insu_cod', '$this->insu_nom', '$this->insu_marca', '$this->insu_prov', 
        '$this->insu_cant', '$this->insu_prec')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
