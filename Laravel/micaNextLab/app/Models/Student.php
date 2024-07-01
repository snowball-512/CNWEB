<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;public $timestamps = false;
    protected $primaryKey = 'StudentID';
    public function type(){
        return $this->belongsTo(Type::class, 'TypesID', 'TypesID');
    }
    protected $fillable = ['StudentID', 'TypesID', 'StudentName', 'StudentBirthday', 'StudentGender', 'StudentAddress','StudentPhoneNumber'];

}
