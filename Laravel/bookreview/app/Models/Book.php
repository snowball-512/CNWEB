<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'BookID';
    protected $fillable = [
        'BookID', 
        'Title', 
        'Author', 
        'Genre', 
        'PubilicationYear', 
        'ISBN', 
        'CoverImageURL'
    ];
 // Định nghĩa mối quan hệ một-nhiều với mô hình Review
    public function reviews()
    {
        return $this->hasMany(Review::class, 'BookID', 'BookID');
    }
//     // Định nghĩa mối quan hệ nhiều-nhiều với mô hình User thông qua bảng 'user_books'
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_books', 'BookID', 'UserID');
    }
}
