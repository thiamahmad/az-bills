<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public function lines()
    {
        return $this->hasMany(Line::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function total()
    {
        return $this->hasMany(Line::class)
            ->selectRaw('bill_id, SUM(unit_price*quantity) as total')
            ->groupBy('bill_id');
    }
}
