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
        return "Figura: " . $this->getTipoFigura() . ". Con base: " . $this->getLado1() . ", y altura: " . $this->getLado1() . ", Lado lateral: " . $this->getLado1(). ". Tiene de area ". $this->calcularArea(). " y perimetro ". $this->calcularPerimetro();
    }
    
}