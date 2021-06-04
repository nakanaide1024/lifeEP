<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'episodes';

    //カラム
    protected $fillable = [
        'title',
        'remarks',
        'category',
        'user_id'
    ];

    public function user(){
        
        return $this->belongsTo(User::class);
    }
    
}
