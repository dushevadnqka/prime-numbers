<?php
ini_set('display_errors', 1);

require_once __DIR__.'/vendor/autoload.php';

/**
 * default limit
 */
$limit = 10;

/**
 * Accept the command options (limit)
 */
if (count($argv) > 1) {
	$limit = end($argv);
}

$primeNumberInstance = new App\PrimeNumber();
$primes = $primeNumberInstance->getPrimes($limit);

/**
 * initialize the table class
 * draw table
 */
$table = new App\MultiplicationTable($primes);
$table->drawTable();