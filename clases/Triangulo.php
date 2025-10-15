<?php

class Triangulo extends FiguraGeometrica{
    
    public $lado2;
    public $lado3;

    function setLado2($lado2){
        $this-> lado2= $lado2;
    }

    function getLado2(){
        return $this->lado2;       
    }

    function setLado3($lado3){
        $this-> lado3= $lado3;
    }

    function getLado3(){
        return $this->lado3;       
    }

    function __construct($lado1, $lado2, $lado3){
        parent::__construct('Triángulo', $lado1);
        $this-> lado2= $lado2;
        $this-> lado3= $lado3;
    }
    

    function __destruct(){
        
    }

    // el area se saca multiplicando base por altura y dividirlo entre 2
    function calcularArea(){
        $area= $this-> lado2 * $this-> lado3 /2;
        return $area;
    }

    // el perimetro se calcula sumando todos los lados 
    function calcularPerimetro(){
        $perimetro= $this-> getLado1() + $this-> lado2 + $this-> lado3;
        return $perimetro;
    }

    public function __toString() {
        return "La figura: " . $this->getTipoFigura() . "<br> Con base: " . $this->getLado2() . "cm <br> Altura: " . $this->getLado2() . "cm<br> Y Lado lateral: " . $this->getLado3(). ".cm <br> Tiene de área ". $this->calcularArea(). " cm y perímetro ". $this->calcularPerimetro(). " cm.";
    }

}