<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'priority'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($task) {
            $task->slug = Str::slug($task->description);
        });

        static::updating(function ($task) {
            $task->slug = Str::slug($task->description);
        });
    }
}
