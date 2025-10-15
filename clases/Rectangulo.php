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

        return "La figura: " . $this->getTipoFigura() . "<br> Con base: " . $this->getLado1() . "cm <br> Altura: " . $this->getLado2() . "cm<br> Tiene de área ". $this->calcularArea(). " cm y perímetro ". $this->calcularPerimetro(). " cm.";

    }
}