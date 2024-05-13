<?php
    //Definicion de clase
    class figura{
        public function Dibujar(){
            echo "La figura está dibujada.";
        }
    }

    class circulo extends figura{
        public function girar(){
            echo "Círculo girando...";
        }
    }

    class cuadrado extends figura{
        public function DibujarReal(){
            echo '<br>';
            echo "-----------<br>";
            echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|";
            echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|";
            echo "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|";
            echo "-----------<br>";
        }
    }

    class triangulo extends figura{
        // Method overridden from parent class
        public function Dibujar(){
            echo "Triángulo dibujado.";
        }
    }

    //Código cliente 
    $plato = new circulo();
    $moneda = new circulo();
    
    $plato->Dibujar();
    $moneda->Dibujar();

    $plato->girar();
    $moneda->girar();

    echo "<br>"; //salto de línea 

    $cuadro = new cuadrado();
    $cuadro->Dibujar();
    $cuadro->DibujarReal();

    $escuadra = new triangulo();
    $escuadra->Dibujar(); // Corrected method call
?>