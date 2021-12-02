<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'unit_price', 'quantity', 'currency', 'bill_id'];

    public function bill(){
        return $this->belongsTo(Bill::class);
    }
}
