<?php
namespace App;

/**
 * MultiplicationTable
 *
 * The class responsibility is to render a table in cli by given numbers
 */
class MultiplicationTable
{
    /**
     *
     * @var array
     */
    private $numbers = array();
    
    /**
     *
     * @var integer
     */
    private $dividerLength;


    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
        $this->calculateDividerlength();
    }

    /**
     * Draw table in console
     */
    public function drawTable()
    {
        fwrite(STDOUT, str_repeat(" ", $this->dividerLength + 1));

        $this->drawRow();

        foreach ($this->numbers as $row) {
            $this->drawCell($row);
            $this->drawRow($row);
        }
    }

    /**
     * Calculate the length of the cell- divider
     *
     * @return MultiplicationTable
     */
    private function calculateDividerlength()
    {
        $biggestNumber = end($this->numbers);
        $this->dividerLength = strlen(pow($biggestNumber, 2));
        return $this;
    }

    /**
     * Draw table rows
     *
     * @param int $row
     */
    private function drawRow(int $row = 1)
    {
        foreach ($this->numbers as $cell) {
            $this->drawCell($row * $cell);
        }

        fwrite(STDOUT, PHP_EOL);
    }

    /**
     * Draw a single cell
     *
     * @param int $value
     */
    private function drawCell(int $value)
    {
        fwrite(STDOUT, str_repeat(" ", $this->dividerLength - strlen($value) + 1).$value);
    }
}
