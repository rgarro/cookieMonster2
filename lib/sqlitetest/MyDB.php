<?php
class MyDB extends SQLite3
{
    function __construct($dbPath)
    {
        $this->open($dbPath);
    }
}