<?php

namespace App\Models;

use App\Traits\SearchTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory, SearchTraits;

    public static $NIVEL_HARDWARE = 1;
    public static $NIVEL_SOFTWARE = 2;

    public static $NIVEL_1 = 1;
    public static $NIVEL_2 = 2;

    protected $fillable = ['name','fecha','nivel','description','observacion'];


    public function responsables(){
        return $this->belongsToMany(Person::class,'responsables_persons');
    }
}
