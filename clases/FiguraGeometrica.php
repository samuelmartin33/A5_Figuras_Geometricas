<?php

class FiguraGeometrica{
    public $tipoFigura
    public $lado1


    function setTipoFigura($tipoFigura){
        $this-> tipoFigura= $tipoFigura;
    }

    function getTipoFigura(){
        $this->tipoFigura = $tipoFigura;       
    }

    function setLado1($lado1){
        $this-> lado1= $lado1;
    }

    function getLado1(){
        $this->lado1 = $lado1;       
    }

    function __construct($tipoFigura, $lado1){
        $this-> tipoFigura= $tipoFigura;
        $this-> lado1= $lado1;
    }

    function __destruct(){
        $this->tipoFigura;
        $this->lado1;
    }

    function calcuarArea(){
        
    }
}