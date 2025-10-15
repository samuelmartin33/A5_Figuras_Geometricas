<?php

class Cuadrado extends FiguraGeometrica{

    public function __construct($lado1) {
        parent::__construct('Cuadrado', $lado1);
    }

    public function __destruct() {
    }
    
    public function calcularArea() {
        return pow($this->getLado1(), 2);
    }

    public function calcularPerimetro() {
        $area= 4 * $this->getLado1();
        return $area;
    }

    public function __toString() {
        return "La figura: " . $this->getTipoFigura() . "<br> Con base: " . $this->getLado1() . "cm <br> Altura: " . $this->getLado1() . "cm<br> Y Lado lateral: " . $this->getLado1(). ".cm <br> Tiene de área ". $this->calcularArea(). " cm y perímetro ". $this->calcularPerimetro(). " cm.";
    }
    
}