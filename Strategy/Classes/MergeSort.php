<?php


namespace Classes;


use sort\SortStrategy;

class MergeSort implements SortStrategy
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
        $this->data = asort($this->data);
        return $this->data;
    }
}