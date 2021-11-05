<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Grade extends Model
{
    use HasTranslations;

    public $translatable  = ['Name_Grades'];

    protected $fillable=['Name_Grades','Notes'];
    protected $table = 'Grades';
  //  public $timestamps = true;

}
