<?php


namespace App\Models;


class MBLanguage_codes extends CoreModel
{
    public $incrementing = false;
    public $updated_at = false;
    /**
     * Database table name
     * @var string
     */
    protected $table = 'mb_language_codes';

    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['language_code', 'name', 'is_active'];

    public $timestamps = false;
}