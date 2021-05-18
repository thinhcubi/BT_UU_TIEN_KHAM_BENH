<?php

class Patient{
    public string $name;
    public int $code;

    public function __construct(int $code, string $name)
    {
        $this->name = $name;
        $this->code = $code;
    }
}