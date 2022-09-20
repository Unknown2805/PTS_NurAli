<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    use HasFactory;

    protected $fillable = [
        'qty',
        'transfer_id'
    ];

    public function Transfer(){
        return $this->belongsTo(Transfer::class);
    }
    public function WithDraw(){
        return $this->hasOne(WithDraw::class);
    }
}
