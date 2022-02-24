<?php


class Producto{

    public $descripcion;
    private $precio;
    public $tock_inv;
    static $estado="Activo";

    function __construct($vr_descripcion,$vr_precio)
    {
        producto::$estado="Activo";
        $this->descripcion=$vr_descripcion;
        $this->precio=$vr_precio;
        $this->tock_inv=40;
    }

    function getPrecio(){
        return $this ->precio;
    }
    function setPrecio($vr_precio){
        $this->precio=$vr_precio;
    }
  
    function setEstado($vr_estado){
        Producto::$estado=$vr_estado;
    }

    
    function getInfoProducto(){
        $arrayInf =Array(
            'Descripcion: '=>$this->descripcion,
            'Precio: '=>$this->precio,
            'Stock Inventario: '=>$this->tock_inv,
            'Estado: '=>Producto::$estado,
        );
        return $arrayInf;
    }


} //end          




?>