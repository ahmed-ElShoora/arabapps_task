<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'datas';
    protected $fillable = [
        'id',
        'user_id',
        'first_name', 
        'last_name', 
        'email', 
        'number_passport', 
        'status', 
        'age', 
        'step', 
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
