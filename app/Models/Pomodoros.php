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
        'start',
        'end',
        'deleted_by'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function deletedBy(){
        return $this->belongsTo(User::class,'deleted_by');
    }

    public function status(){
        return $this->belongsTo(Status::class,'status_id');
    }

    public function tasks(){
        return $this->belongsTo(Tasks::class, 'task_id');
    }
}

