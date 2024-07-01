<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name','image_url','created_at','updated_at'];
    public function regions()
    {
        return $this->hasMany(Region::class, 'flower_id', 'id');
    }
}
