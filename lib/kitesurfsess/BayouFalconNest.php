<?php
/**
 * Custom Sqlite Over Ride for this Project
 * 
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
class BayouFalconNest extends SQLite3
{
    function __construct($dbPath)
    {
        $this->open($dbPath);
    }
}