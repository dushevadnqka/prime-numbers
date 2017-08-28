<?php

namespace spec\App;

use App\PrimeNumber;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeNumberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PrimeNumber::class);
    }

    function it_returns_first_10_prime_numbers()
    {
        $first10Primes = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29);

        foreach ($first10Primes as $k => $v) {
            $this->getPrimes(10)->shouldHaveKeyWithValue($k, $v);
        }
    }

    function it_returns_count_of_numbers_equal_to_given_limit()
    {
        $limit = rand(1, 44);

        $this->getPrimes($limit)->shouldHaveCount($limit);
    }
}
