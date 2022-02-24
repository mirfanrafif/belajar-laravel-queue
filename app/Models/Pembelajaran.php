<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelajaran extends Model
{
    use HasFactory;

    protected $table = "pembelajaran";

    protected $primaryKey = "id";

    protected $fillable = ["nama", "event_name", "execute_time"];

    public $timestamps = false;
}
