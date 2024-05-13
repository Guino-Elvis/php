<?php

abstract class FiguraGeometrica
{
    protected $fila;
    protected $columna;

    abstract public function Dibujar();
    abstract public function DibujarReal();
    abstract public function Position($x, $y);
    abstract public function CalcularArea();
}

class circulo extends FiguraGeometrica
{
    private $nombre_objeto;

    public function Dibujar()
    {
        echo "El círculo se ha dibujado.";
    }

    public function DibujarReal()
    {
        echo "El círculo se ha dibujado.";
        // Mostrar la etiqueta img con la ruta de la imagen del círculo
        echo "<img src='" . $this->nombre_objeto . ".jpg' style='position: absolute; left: " . $this->fila . "px; top: " . $this->columna . "px;'>";
    }

    public function CalcularArea()
    {
        echo "el circulo area";
    }
    public function Position($x, $y)
    {
        $this->fila = $x;
        $this->columna = $y;
    }

    public function SetNombre($nombre)
    {
        $this->nombre_objeto = $nombre;
    }
}

class cuadrado extends FiguraGeometrica
{
    public function Dibujar()
    {
        echo "El cuadrado se ha dibujado.";
    }

    public function DibujarReal()
    {
    }

    public function CalcularArea()
    {
    }
    public function Position($x, $y)
    {
        $this->fila = $x;
        $this->columna = $y;
    }
}

class triangulo extends FiguraGeometrica
{
    public function Dibujar()
    {
    }

    public function DibujarReal()
    {
    }

    public function CalcularArea()
    {
    }

    public function Position($x, $y)
    {
        $this->fila = $x;
        $this->columna = $y;
    }
}

// Ahora creamos la clase fábrica de figuras.
class figuraFactory
{
    public static function CrearFigura($nombre_figura)
    {
        switch ($nombre_figura) {
            // Según el nombre de la figura solicitada, se instancia y devuelve la clase correspondiente.
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

// Código cliente:
if(isset($_POST['coord_x']) && isset($_POST['coord_y'])) {
    $coord_x = $_POST['coord_x'];
    $coord_y = $_POST['coord_y'];

    // Creamos una instancia de un círculo y lo dibujamos 
    $plato = figuraFactory::CrearFigura('circulo');
    $plato->SetNombre('img/plato');
    $plato->Position($coord_x, $coord_y); 
    $plato->DibujarReal(); 
    echo '<br>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dibujar Figura</title>
</head>
<body>
    <form method="post">
        <label for="coord_x">Coordenada X:</label>
        <input type="number" id="coord_x" name="coord_x"><br><br>
        
        <label for="coord_y">Coordenada Y:</label>
        <input type="number" id="coord_y" name="coord_y"><br><br>

        <input type="submit" value="Dibujar">
    </form>
</body>
</html>