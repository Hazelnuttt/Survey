<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Fav_restaurant extends Model
{
    protected $table = 'fav_restaurant';
    protected $primaryKey = 'id';
    public $timestamps = false;

}