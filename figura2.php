<?php
    //Este programa demuestra el uso del patrón de diseño "Factory"
    
    //Primero creamos una interfaz
    interface FiguraGeometrica{
        //definimos 3 funcionas abstractas.
        public function Dibujar();
        public function DibujarReal();
        public function CalcularArea($dato);
    }

    class circulo implements FiguraGeometrica{
        public function Dibujar(){
            echo "El objeto circulo se ha dibujado.";
        }
        public function DibujarReal(){

        }
        public function CalcularArea($dato){
            return 3.14*$dato*$dato;            
        }
    }

    class cuadrado implements FiguraGeometrica{
        public function Dibujar(){
            echo "El cuadrado se ha dibujado.";
        }
        public function DibujarReal(){

        }
        public function CalcularArea($dato){

        }
    }

    class triangulo implements FiguraGeometrica{
        public function Dibujar(){
            echo "El triángulo se ha dibujado";
        }
        public function DibujarReal(){

        }
        public function CalcularArea($dato){

        }
    }

    //Ahora creamos la clase fábrica de figuras.
    class figuraFactory{
        public static function CrearFigura($nombre_figura){
            switch($nombre_figura){
                case 'circulo':
                    return new circulo();
                    break;
                case 'cuadrado':
                    return new cuadrado();
                    break;
                case 'triangulo':
                    return new triangulo();
                    break;

            }
        }
    }

    //Codigo cliente:

    $plato  = figuraFactory::CrearFigura('circulo');
    $moneda = figuraFactory::CrearFigura('circulo');

    $plato->Dibujar();
    $moneda->Dibujar();

    echo '<br>';
    $area_del_plato = $plato->CalcularArea(8);
    echo "El área del plato de 8cm es ".$area_del_plato.' cm 2.';
    echo '<br>';



    echo '<br>';
    $cuadro = figuraFactory::CrearFigura('cuadrado');
    $cuadro->Dibujar();

    echo '<br>';
    $escuadra = figuraFactory::CrearFigura('triangulo');
    $escuadra->Dibujar();