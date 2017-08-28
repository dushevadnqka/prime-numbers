<?php

namespace spec\App;

use App\MultiplicationTable;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MultiplicationTableSpec extends ObjectBehavior
{
	function let()
    {
        $this->beConstructedWith(array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(MultiplicationTable::class);
    }

    function it_renders_multiplication_table_by_given_array_of_numbers()
    {
    	fwrite(STDOUT, PHP_EOL);
    	$benchmarkTimeStart = microtime(true);
    	$this->drawTable();
    	fwrite(STDOUT, PHP_EOL.'exec time: '.(microtime(true) - $benchmarkTimeStart).PHP_EOL);
    }
}
