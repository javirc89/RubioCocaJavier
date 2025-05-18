<?php


    /**
     * Script para la tarea 5, se van a crear dos funciones matemáticas
     * 
     * @author Javier Rubio 
     * @version 1.0
     * @internal Script con fines simplemente educativos
     */


    /**
     * 
     * Función para calcular la suma de dos números
     *
     * @param int $primerNumero Primer número a sumar
     * @param int $segundoNumero Segundo número a sumar
     * 
     * @return int La suma de ambos números
     */

    function suma(int $primerNumero, int $segundoNumero): int
    {
        return $primerNumero + $segundoNumero;
    }


    /**
     * Función para calcular el área de un rectángulo
     * 
     * @param float $base Longitud de la base del rectángulo
     * @param float $altura Longitud de la altura del rectángulo
     *
     * @return float El área de un rectángulo
     */

    function areaRectangulo(float $base, float $altura): float
    {

        return $base * $altura;
    }
