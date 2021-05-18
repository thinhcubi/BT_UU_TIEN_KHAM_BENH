<?php
include_once "Patient.php";
class Queue
{
    protected array $patient;

    public function __construct()
    {
       $this->patient = [];
    }
    public function enqueue($data)
    {
       $this->patient[$data->name] = $data->code;
       asort($this->patient);
       return $this;
    }
    public function dequeue()
    {
        array_shift($this->patient);
        return key($this->patient);
    }
    public function count(): int
    {
        return count($this->patient);
    }
    public function get() : array
    {
        return $this->patient;
    }
}