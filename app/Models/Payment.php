<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'money',
        'money_id'
    ];
    public function Money(){
        return $this->belongsTo(Money::class);
    }
}
