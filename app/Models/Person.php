<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public $fillable = ['names','lastname','birthday','ci','attachments'];

    public function responsables(){
        return $this->belongsToMany(Report::class,'responsables_persons');
    }
}
