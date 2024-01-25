<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'casual';
    protected $fillable = ['legalizaton_date',
'adres'];

    public function casual()
    {
        return $this->belongsTo(Casual::class);
    }

    public function odservation()
    {
        return $this->belongsTo(Odservation::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class,'order_activity',
                                            'order_id', 'activity_id');
    }
}
