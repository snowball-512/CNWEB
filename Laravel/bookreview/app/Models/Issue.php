<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;   protected $primaryKey = 'id';
    public function computer(){
        return $this->belongsTo(Computer::class, 'computer_id', 'id');
    }
    protected $fillable = ['id', 'computer_id','computer_name', 'reported_by', 'reported_date', 'description','urgency','status'];

}
