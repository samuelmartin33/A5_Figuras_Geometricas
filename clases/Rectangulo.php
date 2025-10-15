<?php

class Rectangulo extends FiguraGeometrica{
    public $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct('Rectangulo', $lado1);
        $this->lado2 = $lado2;
    }

    public function __destruct() {
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function calcularArea() {
        $area = $this->getLado1() * $this->lado2;
        return $area;
    }

    public function calcularPerimetro() {
        $perimetro = 2 * ($this->getLado1() + $this->lado2);
        return $perimetro;
    }

    public function __toString() {
        return "Figura: " . $this->getTipoFigura() . ". Con base: " . $this->getLado1() . ", y altura: " . $this->getLado2(). ". Tiene de area ". $this->calcularArea(). " y perimetro ". $this->calcularPerimetro();
    }
}