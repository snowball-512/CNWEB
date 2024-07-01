<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;public $timestamps = false;
    protected $primaryKey = 'ReviewID';
      // Định nghĩa mối quan hệ nhiều-một với mô hình Book
    public function book()
    {
        return $this->belongsTo(Book::class, 'BookID', 'BookID');
    }
    // Định nghĩa mối quan hệ nhiều-một với mô hình User
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'id');
    }
    // public function users()
    // {
    //     return $this->hasMany(::class, 'BookID', 'BookID');
    // }

    // Các trường có thể gán giá trị hàng loạt (mass assignable)
    protected $fillable = ['ReviewID','BookID','UserID', 'Rating','Author','ReviewText','ReviewDate'];

}
