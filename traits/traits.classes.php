<?php
namespace traits;

trait GetAll
{
    private string $table;
    public function __construct($table)
    {
        $this->$table = $table;
    }
}
