<?php

interface ManageShapeInterface {
    public function calculate();
}

class Square implements ShapeInterface, ManageShapeInterface {
    public function area() { /*Hacer cálculos*/ }

    public function calculate() {
        return $this->area();
    }
}

class Cube implements ShapeInterface, SolidShapeInterface, ManageShapeInterface {
    public function area() { /*Hacer cálculos*/ }
    public function volume() { /*Hacer cálculos*/ }

    public function calculate() {
        return $this->area() + $this->volume();
    }
}

?>