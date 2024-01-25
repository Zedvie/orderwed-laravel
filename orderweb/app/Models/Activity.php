<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['descripcion',
        'hours',
        'technician_id',
        'type_id',];
    /**
     * se debe colocar el nombre de la FK ya que ésta hace refecncia al campo document de technician 
     * y por llamarse diferente a 'id' debe especificarse manual mente
     */
    public function technician()
    {
        return $this->belongsTo(Technician::class, 'technician_id');
    }

    public function type_activity()
    {
        return $this->belongsTo(TypeActivity::class);
    }

    public function ordes()
    {
        return $this->belongsToMany(Order::class,'order_activity',
                                            'order_id', 'activity_id');
    }
}
