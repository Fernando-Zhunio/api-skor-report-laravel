<?php

namespace App\Models;

use App\Traits\SearchTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Binnacle extends Model
{
    use HasFactory, SearchTraits;

    protected $fillable = ['name','turno','fecha_inicio','fecha_fin','ref_ticket','via','state','reportado','soport_nivel','tec_spec','report_id'];
    public static $STATE_ACTIVE = 1;
    public static $STATE_DEACTIVE = 2;

    public function report(){
        return $this->belongsTo(Report::class);
    }


}
