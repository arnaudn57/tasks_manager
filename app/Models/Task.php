<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'description',
      'status',
      'user_id',
    ];

    public function task(){
      return $this->belongsTo(User::class);
    }
}
