<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithDraws extends Model
{
    use HasFactory;

    protected $fillable = [
        'money',
        'money_id'
    ];

    public function Money(){
        return $this->belongsTo(Money::class);
    }
}
