<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pomodoros extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'status_id',
        'task_id',
        'user_id',
        'project_id',
        'start',
        'end',
        'deleted_by'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function project(){
        return $this->belongsTo(Projects::class);
    }

    public function status(){
        return $this->hasOne(Status::class);
    }

    public function task(){
        return $this->hasOne(Tasks::class);
    }
}

