<?php

function getWindDirection(string $key): string 
{
    return [
        "N" => "Norte",
        "NNE" => "Nornoreste",
        "NE" => "Noreste",
        "ENE" => "Este-noreste",
        "E" => "Este",
        "ESE" => "Este-sureste",
        "SE" => "Sureste",
        "SSE" => "Sursureste",
        "S" => "Sur",
        "SSW" => "Sursuroeste",
        "SW" => "Suroeste",
        "WSW" => "Oeste-suroeste",
        "W" => "Oeste",
        "WNW" => "Oestenoroeste",
        "NW" => "Nornoroeste",
        "NNW" => "Nornoroeste",
    ][$key] ?? 'Dirección no valida';
}
