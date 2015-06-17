<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Experience Formula
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'experience' => function ($level) {
        return (50 / 3) * (pow($level, 3) - (6 * pow($level, 2)) + (17 * $level) - 12);
    },

    /*
    |--------------------------------------------------------------------------
    | Magic Level Formula
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */
   
    'maglevel' => false,

    /*
    |--------------------------------------------------------------------------
    | Health Formula
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */
   
    'health' => function ($level, $value) {
        return 145 + ($level >= 8 ? (($level - 8) * $value) + (5 * 8) : (5 * $level));
    },

    /*
    |--------------------------------------------------------------------------
    | Mana Formula
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */
   
    'mana' => function ($level, $value) {
        return ($level >= 8 ? (($level - 8) * $value) + (5 * 8) : (5 * $level));
    },

    /*
    |--------------------------------------------------------------------------
    | Capacity Formula
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */
   
    'capacity' => function ($level, $value) {
        return 390 + ($level >= 8 ? (($level - 8) * $value) + (10 * 8) : (10 * $level));
    },

];
