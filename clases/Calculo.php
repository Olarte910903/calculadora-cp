<?php

class Calculo
{
    public function calcularCantidadMaxima ($pliegoX, $pliegoY, $corteX, $corteY)
    {
        $cantidadMaxima = floor(($pliegoX / $corteX)) * floor(($pliegoY / $corteY));

        return round($cantidadMaxima, 0, PHP_ROUND_HALF_DOWN);

    }
}
?>