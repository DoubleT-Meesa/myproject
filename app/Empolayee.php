<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empolayee extends Model
{
    protected $table = "empoloyees";
    protected $fillable = ["name","age","salary","phone"];    
 	protected $primaryKey = "id";
}
