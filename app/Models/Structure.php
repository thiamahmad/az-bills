<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory;
    
    public function customers(){  
        return $this->hasMany(Customer::class);
    }

    public function user(){  
        return $this->belongsTo(User::class);
    }
}
