<?php

class Calculo
{
    public function cantidadMaxima ($xp, $yp, $xt, $yt)
    {
        $cantidadMaxima = floor(($xp / $xt)) * floor(($yp / $yt));

        return round($cantidadMaxima, 0, PHP_ROUND_HALF_DOWN);

    }
}
?>