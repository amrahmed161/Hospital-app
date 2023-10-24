<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class sectionTranslation extends Model
{
    protected $fillable = ['name','description'];
    public $timestamps = false;
    use HasFactory;

}
