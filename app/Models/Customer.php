<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'address', 'city_id', 'country_id', 'structure_id'];

    public function bills(){
        return $this->hasMany(Bill::class);
    }

    public function structure(){
        
        return $this->belongsTo(Structure::class);
    }
}
