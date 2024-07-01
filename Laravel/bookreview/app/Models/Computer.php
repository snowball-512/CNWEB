<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Runner\Baseline\Issue;

class Computer extends Model
{
    use HasFactory;public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'computer_name', 
        'model', 
        'operating_system', 
        'processor', 
        'memory', 
        'available', 
    ];
 // Định nghĩa mối quan hệ một-nhiều với mô hình Review
 public function issues()
 {
     return $this->hasMany(Issue::class, 'computer_id', 'id');
 }

//     // Định nghĩa mối quan hệ nhiều-nhiều với mô hình User thông qua bảng 'user_books'
    
}
