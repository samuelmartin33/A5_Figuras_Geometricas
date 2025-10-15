<?php

class Circulo extends FiguraGeometrica {
    
    public function __construct($lado1) {
        parent::__construct('Círculo', $lado1); 
    }

    public function __destruct() {
    }

    public function getRadio() {
        return $this->getLado1();
    }
    
    public function setRadio($lado1) {
        $this->setLado1($lado1);
    }

    public function calcularArea() {
        return M_PI * pow($this->getRadio(), 2);
    }

    public function calcularPerimetro() {
        return 2 * M_PI * $this->getRadio();
    }

    public function __toString() {
        return "Figura: " . $this->getTipoFigura() . ". Radio: " . $this->getRadio();
    }
}
?>