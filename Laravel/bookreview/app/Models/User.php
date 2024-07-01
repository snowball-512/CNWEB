<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    //$this->hasMany(...) - Phương thức hasMany được sử dụng để định nghĩa mối quan hệ một-nhiều. Mối quan hệ này cho biết mô hình hiện tại có thể có nhiều bản ghi liên quan trong mô hình Review.
// Review::class - Xác định mô hình Review là mô hình liên quan.
// 'userid' - Xác định khóa ngoại (foreign key) trong bảng Review dùng để liên kết với mô hình hiện tại.
    public function reviews()
    {
        return $this->hasMany(Review::class, 'userid');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
