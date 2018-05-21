<?php

namespace App;
use Laravel\Scout\Searchable;


use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use Searchable;
    protected $table = 'application';
    public $timestamps = false;

}
