<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceConvert extends Model
{
    use HasFactory;

    protected $fillable = [
        'websiteName',
        'listConvert',
        'user_id'
    ];

    public function task()
    {
      return $this->belongsTo(User::class);
    }
}
