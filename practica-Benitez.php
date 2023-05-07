<?php
/*
 * Este script contiene dos funciones: multiplicar y dividir. Ambas funciones toman dos números como
 * argumentos y devuelven el resultado de la operación correspondiente.
 *
 * @package EjemploDocumentacion
 * @version 1.0
 * @author Benitez
 */

/* Multiplica dos números y devuelve el resultado.
 *
 * @param float $a El primer número a multiplicar.
 * @param float $b El segundo número a multiplicar.
 *
 * @return float El resultado de la multiplicación.
 *
 * @since 1.0
 */
function multiplicar($a, $b) {
  return $a * $b;
}

/**
 * Divide dos números y devuelve el resultado.
 *
 * @param float $a El número que se divide.
 * @param float $b El número por el que se divide.
 *
 * @return float El resultado de la división.
 *
 * @since 1.0
 */
function dividir($a, $b) {
  return $a / $b;
}
 