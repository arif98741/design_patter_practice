<?php


namespace Classes;


use sort\SortStrategy;

class QuickSort implements SortStrategy
{
    private $data;

    /**
     * QuickSort constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @inheritDoc
     */
    public function sort()
    {

        $this->data = ksort($this->data);
        return $this->data;
    }
}