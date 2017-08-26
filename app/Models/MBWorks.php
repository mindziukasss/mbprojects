<?php


namespace App\Models;


class MBWorks extends CoreModel
{
    /**
     * Database table name
     * @var string
     */
    protected $table = 'mb_works';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'url'];
}