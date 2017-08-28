<?php
namespace App;

/**
 * PrimeNumber
 *
 * The class responsibility is to find and return only prime numbers by given limit as array of numbers
 */
class PrimeNumber
{
    /**
     * Prepare set of all primes
     *
     * @param int $end
     * @return array
     */
    public function getPrimes(int $end)
    {
        $primes = array();

        for ($i = 0; count($primes) <= $end - 1; $i++) {
            if ($this->isPrime($i) && $i > 1) {
                $primes[] = $i;
            }
        }

        return $primes;
    }

    /**
     * Check if the number is prime
     *
     * @param int $number
     * @return boolean
     */
    public function isPrime(int $number)
    {
        $x = sqrt($number);
        $x = floor($x);

        for ($i = 2; $i <= $x; ++$i) {
            if ($number % $i == 0) {
                break;
            }
        }

        if ($x == $i - 1) {
            return true;
        } else {
            return false;
        }
    }
}
