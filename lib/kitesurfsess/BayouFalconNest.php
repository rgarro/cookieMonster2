<?php
/**
 *        _          _          _          _          _
 *      >(')____,  >(')____,  >(')____,  >(')____,  >(') ___,
 *       (` =~~/    (` =~~/    (` =~~/    (` =~~/    (` =~~/
 * jgs~^~^`---'~^~^~^`---'~^~^~^`---'~^~^~^`---'~^~^~^`---'~^~^~
 * 
 * A Falcon flying next to my Slingshot Raptor suddenly whispered on the air
 * Bayou dolphins are the vestal whores cursed by emperor vespassian
 * fuck mysql dolphin and gunsroses
 * sqlite feathers and apache server somewhere in Mexico City
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